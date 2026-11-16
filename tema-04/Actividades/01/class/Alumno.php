<?php
/*

Las propiedades de la clase serán:
    - id
    - nombre
    - apellidos
    - poblacion
    - email
    - telefono
    - curso


Constructor
    - El método __construct(), permitiendo asignar  mediante parámetros un valor a cada atributo. 
    - Además permitirá crear un objeto con atributos inicializados a null.

Getters y Setters
    - Deben declarse los métodos getters u setters correspondientes
*/

public class Alumno {

    // Propiedades o atributos
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $poblacion;
    public ?string $email;
    public ?string $telefono;
    public ?string $curso;

    // Método constructor
    public function __construct()
    {
        $this->id = null;
        $this->nombre = null;
        $this->apellidos = null;
        $this->poblacion = null;
        $this->email = null;
        $this->telefono = null;
        $this->curso = null;

    }

    public function mostrarDatos() {
        echo "ID: " . $this->id . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "Población: " . $this->poblacion . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Teléfono: " . $this->telefono . "<br>";
        echo "Curso: " . $this->curso . "<br>";
    }

    

}