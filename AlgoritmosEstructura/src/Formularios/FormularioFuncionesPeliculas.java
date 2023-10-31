/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package Formularios;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.HashMap;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author PIERRE
 */
public class FormularioFuncionesPeliculas extends javax.swing.JFrame {

    private HashMap<Integer, Proyeccion> proyeccionesMap = new HashMap<>();
    private DefaultTableModel model;

    /**
     * Creates new form FormularioCliente
     */
    public FormularioFuncionesPeliculas() {
        initComponents();
        cargarPeliculas();
        cargarSalas();
        cargarFechas();
        cbxPeliculas.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                cargarDuracionPeliculaSeleccionada();
                calcularFinHoraMinuto(); // Calcular la hora de finalización cuando se selecciona una película

            }
        });
        btnCalcularFin.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                calcularFinHoraMinuto(); // Calcular la hora de finalización cuando se hace clic en el botón
            }
        });
        cargarDatosEnTabla();
    }

    private void cargarDatosEnTabla() {
        Connection conn = ConexionBD.establecerConexion();

        try {
            String salaSeleccionada = "Sala 1"; // Cambia esto por el nombre de la sala que desees
            String query = "SELECT p.ID_Proyeccion, pe.titulo AS Nombre_Pelicula, p.FechaInicio, p.FechaFin "
                    + "FROM Proyecciones p "
                    + "INNER JOIN Pelicula pe ON p.CodigoPelicula = pe.CodigoPelicula "
                    + "INNER JOIN Salas s ON p.ID_Sala = s.ID_Sala "
                    + "WHERE s.Nombre = ?";

            PreparedStatement stmt = conn.prepareStatement(query);
            stmt.setString(1, salaSeleccionada);

            ResultSet rs = stmt.executeQuery();

            // Limpiar la tabla hash antes de cargar nuevos datos
            proyeccionesMap.clear();

            while (rs.next()) {
                int idProyeccion = rs.getInt("ID_Proyeccion");
                String nombrePelicula = rs.getString("Nombre_Pelicula");
                String fechaInicio = rs.getString("FechaInicio");
                String fechaFin = rs.getString("FechaFin");

                Proyeccion proyeccion = new Proyeccion(idProyeccion, nombrePelicula, fechaInicio, fechaFin);

                // Almacena la proyección en la tabla hash
                proyeccionesMap.put(idProyeccion, proyeccion);
            }

            // Actualiza la tabla con los datos de la tabla hash
            actualizarTabla();
        } catch (SQLException e) {
            e.printStackTrace();
            JOptionPane.showMessageDialog(this, "Error al cargar los datos de la sala.");
        } finally {
            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }
    private void actualizarTabla() {
        DefaultTableModel model = new DefaultTableModel();
        model.setColumnIdentifiers(new Object[]{"ID_Proyeccion", "Nombre_Pelicula", "FechaInicio", "FechaFin"});

        for (Proyeccion proyeccion : proyeccionesMap.values()) {
            model.addRow(new Object[]{
                proyeccion.getIdProyeccion(),
                proyeccion.getNombrePelicula(),
                proyeccion.getFechaInicio(),
                proyeccion.getFechaFin()
            });
        }

        tablita.setModel(model);
    }

    private void cargarFechas() {
        // Obtiene la fecha de hoy
        LocalDate fechaHoy = LocalDate.now();

        // Formateador para mostrar la fecha en un formato deseado
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd");

        // Agrega la fecha de hoy al JComboBox
        cbxFechas.addItem(fechaHoy.format(formatter));

        // Agrega las fechas de los próximos 4 días
        for (int i = 1; i <= 4; i++) {
            LocalDate fechaSiguiente = fechaHoy.plusDays(i);
            cbxFechas.addItem(fechaSiguiente.format(formatter));
        }
    }

    private void calcularFinHoraMinuto() {
        String duracion = txtDuracion.getText();
        String inicioHora = txtInicioHora.getText();
        String inicioMinuto = txtInicioMinuto.getText();

        try {
            int duracionMinutos = Integer.parseInt(duracion);
            int inicioHoraInt = Integer.parseInt(inicioHora);
            int inicioMinutoInt = Integer.parseInt(inicioMinuto);

            int totalMinutos = inicioHoraInt * 60 + inicioMinutoInt + duracionMinutos;
            int finHoraInt = totalMinutos / 60;
            int finMinutoInt = totalMinutos % 60;

            txtFinHora.setText(String.valueOf(finHoraInt));
            txtFinMinuto.setText(String.valueOf(finMinutoInt));
        } catch (NumberFormatException e) {
            // Manejo de error en caso de que los campos no sean números válidos
            // Puedes mostrar un mensaje de error o realizar la lógica adecuada
        }
    }

    private void cargarDuracionPeliculaSeleccionada() {
        String peliculaSeleccionada = (String) cbxPeliculas.getSelectedItem(); // Obtiene la película seleccionada

        if (peliculaSeleccionada != null) {
            Connection conn = ConexionBD.establecerConexion();
            PreparedStatement stmt = null;
            ResultSet rs = null;

            try {
                String query = "SELECT duracion FROM pelicula WHERE titulo = ?";
                stmt = conn.prepareStatement(query);
                stmt.setString(1, peliculaSeleccionada);
                rs = stmt.executeQuery();

                if (rs.next()) {
                    String duracion = rs.getString("duracion");
                    txtDuracion.setText(duracion); // Establece la duración en el campo txtDuracion
                }
            } catch (SQLException e) {
                e.printStackTrace();
            } finally {
                try {
                    if (rs != null) {
                        rs.close();
                    }
                    if (stmt != null) {
                        stmt.close();
                    }
                    if (conn != null) {
                        conn.close();
                    }
                } catch (SQLException e) {
                    e.printStackTrace();
                }
            }
        }
    }

    private void cargarPeliculas() {
        Connection conn = ConexionBD.establecerConexion(); // Utiliza la conexión de la clase ConexionBD

        PreparedStatement stmt = null;
        ResultSet rs = null;

        try {
            String query = "SELECT titulo FROM pelicula"; // Cambia "nombre" por el nombre de la columna que contiene los nombres de las películas.

            stmt = conn.prepareStatement(query);
            rs = stmt.executeQuery();

            while (rs.next()) {
                String nombrePelicula = rs.getString("Titulo"); // Reemplaza "nombre" con el nombre de la columna que contiene los nombres de las películas en tu tabla.
                cbxPeliculas.addItem(nombrePelicula);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            try {
                if (rs != null) {
                    rs.close();
                }
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    private void cargarSalas() {
        Connection conn = ConexionBD.establecerConexion(); // Utiliza la conexión de la clase ConexionBD

        PreparedStatement stmt = null;
        ResultSet rs = null;

        try {
            String query = "SELECT Nombre FROM salas"; // Cambia "nombre" por el nombre de la columna que contiene los nombres de las películas.

            stmt = conn.prepareStatement(query);
            rs = stmt.executeQuery();

            while (rs.next()) {
                String nombrePelicula = rs.getString("Nombre"); // Reemplaza "nombre" con el nombre de la columna que contiene los nombres de las películas en tu tabla.
                cbxSalas.addItem(nombrePelicula);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            try {
                if (rs != null) {
                    rs.close();
                }
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    private int obtenerIdPelicula(String nombrePelicula, Connection conn) throws SQLException {
        PreparedStatement stmt = null;
        ResultSet rs = null;

        try {
            String query = "SELECT CodigoPelicula FROM Pelicula WHERE Titulo = ?";
            stmt = conn.prepareStatement(query);
            stmt.setString(1, nombrePelicula);
            rs = stmt.executeQuery();

            if (rs.next()) {
                return rs.getInt("CodigoPelicula");
            }
        } finally {
            if (rs != null) {
                rs.close();
            }
            if (stmt != null) {
                stmt.close();
            }
        }

        return -1; // Retorna -1 si no se encuentra el ID de la película
    }

// Método para obtener el ID de la sala a partir de su nombre
    private int obtenerIdSala(String nombreSala, Connection conn) throws SQLException {
        PreparedStatement stmt = null;
        ResultSet rs = null;

        try {
            String query = "SELECT ID_Sala FROM Salas WHERE Nombre = ?";
            stmt = conn.prepareStatement(query);
            stmt.setString(1, nombreSala);
            rs = stmt.executeQuery();

            if (rs.next()) {
                return rs.getInt("ID_Sala");
            }
        } finally {
            if (rs != null) {
                rs.close();
            }
            if (stmt != null) {
                stmt.close();
            }
        }

        return -1; // Retorna -1 si no se encuentra el ID de la sala
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel7 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        txtFinMinuto = new javax.swing.JTextField();
        txtDuracion = new javax.swing.JTextField();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        txtInicioHora = new javax.swing.JTextField();
        jLabel5 = new javax.swing.JLabel();
        jbtnAgregar = new javax.swing.JButton();
        jbtnEliminar = new javax.swing.JButton();
        jlblCantidad = new javax.swing.JLabel();
        jbtnContinuar = new javax.swing.JToggleButton();
        jbtnVolver = new javax.swing.JToggleButton();
        cbxPeliculas = new javax.swing.JComboBox<>();
        jLabel1 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        cbxSalas = new javax.swing.JComboBox<>();
        jScrollPane2 = new javax.swing.JScrollPane();
        tablita = new javax.swing.JTable();
        txtInicioMinuto = new javax.swing.JTextField();
        txtFinHora = new javax.swing.JTextField();
        btnCalcularFin = new javax.swing.JButton();
        cbxFechas = new javax.swing.JComboBox<>();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel7.setFont(new java.awt.Font("Segoe UI", 1, 36)); // NOI18N
        jLabel7.setText("FUNCIONES PELICULAS");

        jLabel2.setText("Fecha");

        txtDuracion.setEditable(false);

        jLabel3.setText("Duracion");

        jLabel4.setText("Inicio");

        jLabel5.setText("Fin");

        jbtnAgregar.setText("Agregar");
        jbtnAgregar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnAgregarActionPerformed(evt);
            }
        });

        jbtnEliminar.setText("Eliminar");
        jbtnEliminar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnEliminarActionPerformed(evt);
            }
        });

        jlblCantidad.setText("0");

        jbtnContinuar.setText("CONTINUAR");
        jbtnContinuar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnContinuarActionPerformed(evt);
            }
        });

        jbtnVolver.setText("VOLVER");
        jbtnVolver.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnVolverActionPerformed(evt);
            }
        });

        jLabel1.setText("Peliculas");

        jLabel6.setText("Salas");

        tablita.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jScrollPane2.setViewportView(tablita);

        btnCalcularFin.setText("jButton1");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(23, 23, 23)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(jLabel7)
                                    .addGroup(layout.createSequentialGroup()
                                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                            .addGroup(layout.createSequentialGroup()
                                                .addComponent(jLabel2)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(cbxFechas, javax.swing.GroupLayout.PREFERRED_SIZE, 109, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                .addGap(13, 13, 13))
                                            .addComponent(btnCalcularFin))
                                        .addGap(18, 18, 18)
                                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                            .addComponent(jLabel3)
                                            .addComponent(jLabel4)
                                            .addComponent(jLabel5))
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                            .addComponent(txtDuracion, javax.swing.GroupLayout.PREFERRED_SIZE, 134, javax.swing.GroupLayout.PREFERRED_SIZE)
                                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                                .addComponent(txtFinHora, javax.swing.GroupLayout.PREFERRED_SIZE, 1, Short.MAX_VALUE)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                                .addComponent(txtFinMinuto, javax.swing.GroupLayout.PREFERRED_SIZE, 55, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                .addGap(6, 6, 6))
                                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                                .addComponent(txtInicioHora, javax.swing.GroupLayout.PREFERRED_SIZE, 55, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                .addGap(18, 18, 18)
                                                .addComponent(txtInicioMinuto, javax.swing.GroupLayout.PREFERRED_SIZE, 55, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                            .addComponent(jLabel6)
                                            .addComponent(cbxPeliculas, javax.swing.GroupLayout.PREFERRED_SIZE, 227, javax.swing.GroupLayout.PREFERRED_SIZE)
                                            .addComponent(jLabel1)
                                            .addComponent(cbxSalas, javax.swing.GroupLayout.PREFERRED_SIZE, 227, javax.swing.GroupLayout.PREFERRED_SIZE))))
                                .addGap(37, 37, 37)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(jbtnAgregar)
                                    .addComponent(jbtnEliminar))
                                .addGap(130, 130, 130))
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(jlblCantidad, javax.swing.GroupLayout.PREFERRED_SIZE, 191, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(484, 484, 484)
                                .addComponent(jbtnVolver, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(18, 18, 18)
                                .addComponent(jbtnContinuar)))
                        .addContainerGap(12, Short.MAX_VALUE))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(64, 64, 64)
                        .addComponent(jLabel1)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                    .addComponent(cbxPeliculas, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(jbtnAgregar))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(jLabel6)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(cbxSalas, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGroup(layout.createSequentialGroup()
                                .addGap(49, 49, 49)
                                .addComponent(jbtnEliminar))))
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jLabel7)
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel2)
                            .addComponent(txtDuracion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel3)
                            .addComponent(cbxFechas, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel4)
                            .addComponent(txtInicioHora, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(txtInicioMinuto, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(jLabel5))
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                    .addComponent(txtFinHora, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(txtFinMinuto, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(btnCalcularFin))))))
                .addGap(32, 32, 32)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(115, 115, 115)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jlblCantidad, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jbtnContinuar)
                    .addComponent(jbtnVolver))
                .addContainerGap(7, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbtnAgregarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnAgregarActionPerformed
        String peliculaSeleccionada = (String) cbxPeliculas.getSelectedItem();
        String salaSeleccionada = (String) cbxSalas.getSelectedItem();
        String fechaSeleccionada = (String) cbxFechas.getSelectedItem();
        String inicioHora = txtInicioHora.getText();
        String inicioMinuto = txtInicioMinuto.getText();
        String finHora = txtFinHora.getText();
        String finMinuto = txtFinMinuto.getText();

        // Comprobar si todos los campos necesarios se han llenado
        if (peliculaSeleccionada.isEmpty() || salaSeleccionada.isEmpty() || fechaSeleccionada.isEmpty()
                || inicioHora.isEmpty() || inicioMinuto.isEmpty() || finHora.isEmpty() || finMinuto.isEmpty()) {
            JOptionPane.showMessageDialog(this, "Por favor, complete todos los campos.");
            return;
        }

        // Crear una cadena de fecha y hora de inicio y fin
        String fechaHoraInicio = fechaSeleccionada + " " + inicioHora + ":" + inicioMinuto + ":00";
        String fechaHoraFin = fechaSeleccionada + " " + finHora + ":" + finMinuto + ":00";

        // Establecer una conexión a la base de datos
        Connection conn = ConexionBD.establecerConexion();
        PreparedStatement stmt = null;

        try {
            // Consulta SQL para insertar una nueva proyección
            String query = "INSERT INTO Proyecciones (CodigoPelicula, ID_Sala, FechaInicio, FechaFin) "
                    + "VALUES (?, ?, ?, ?)";

            stmt = conn.prepareStatement(query);

            // Obtener el ID de la película y sala a partir de sus nombres
            int idPelicula = obtenerIdPelicula(peliculaSeleccionada, conn);
            int idSala = obtenerIdSala(salaSeleccionada, conn);

            // Configurar los parámetros de la consulta
            stmt.setInt(1, idPelicula);
            stmt.setInt(2, idSala);
            stmt.setString(3, fechaHoraInicio);
            stmt.setString(4, fechaHoraFin);

            // Ejecutar la consulta de inserción
            int filasAfectadas = stmt.executeUpdate();

            if (filasAfectadas > 0) {
                JOptionPane.showMessageDialog(this, "Proyección agregada exitosamente.");
            } else {
                JOptionPane.showMessageDialog(this, "No se pudo agregar la proyección.");
            }
        } catch (SQLException e) {
            e.printStackTrace();
            JOptionPane.showMessageDialog(this, "Error al agregar la proyección.");
        } finally {
            try {
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }//GEN-LAST:event_jbtnAgregarActionPerformed

    private void jbtnEliminarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnEliminarActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jbtnEliminarActionPerformed

    private void jbtnVolverActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnVolverActionPerformed

    }//GEN-LAST:event_jbtnVolverActionPerformed
    private void jbtnContinuarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnContinuarActionPerformed


    }//GEN-LAST:event_jbtnContinuarActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(FormularioFuncionesPeliculas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(FormularioFuncionesPeliculas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(FormularioFuncionesPeliculas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(FormularioFuncionesPeliculas.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new FormularioFuncionesPeliculas().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCalcularFin;
    private javax.swing.JComboBox<String> cbxFechas;
    private javax.swing.JComboBox<String> cbxPeliculas;
    private javax.swing.JComboBox<String> cbxSalas;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JButton jbtnAgregar;
    private javax.swing.JToggleButton jbtnContinuar;
    private javax.swing.JButton jbtnEliminar;
    private javax.swing.JToggleButton jbtnVolver;
    private javax.swing.JLabel jlblCantidad;
    private javax.swing.JTable tablita;
    private javax.swing.JTextField txtDuracion;
    private javax.swing.JTextField txtFinHora;
    private javax.swing.JTextField txtFinMinuto;
    private javax.swing.JTextField txtInicioHora;
    private javax.swing.JTextField txtInicioMinuto;
    // End of variables declaration//GEN-END:variables

}
