/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Formularios;

public class Proyeccion {
    private int idProyeccion;
    private String nombrePelicula;
    private String fechaInicio;
    private String fechaFin;

    // Constructor
    public Proyeccion(int idProyeccion, String nombrePelicula, String fechaInicio, String fechaFin) {
        this.idProyeccion = idProyeccion;
        this.nombrePelicula = nombrePelicula;
        this.fechaInicio = fechaInicio;
        this.fechaFin = fechaFin;
    }

    // Getters y Setters
    public int getIdProyeccion() {
        return idProyeccion;
    }

    public String getNombrePelicula() {
        return nombrePelicula;
    }

    public String getFechaInicio() {
        return fechaInicio;
    }

    public String getFechaFin() {
        return fechaFin;
    }
}
