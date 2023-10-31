/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Formularios;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class ConexionBD {
    // JDBC URL, username, and password of MySQL server
    private static final String JDBC_URL = "jdbc:mysql://localhost:3306/proyecto_final_algoritmo";
    private static final String JDBC_USER = "root";
    private static final String JDBC_PASSWORD = "";

    public static Connection establecerConexion() {
        Connection connection = null;

        try {
            // Establish a connection to the database
            connection = DriverManager.getConnection(JDBC_URL, JDBC_USER, JDBC_PASSWORD);
        } catch (SQLException e) {
            e.printStackTrace();
            // Handle any errors that occur during the connection process
        }

        return connection;
    }
}

