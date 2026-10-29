<?php
/*

    Ejemplo 4.1
    Crea la clase persona con los atributos nombre, edad, sexo. 
    Crea un método constructor que inicialice los atributos de la clase.
    Crea un método que muestre los datos de la persona.
    Crear un objeto de la clase persona y mostrar sus datos.
    
*/

Class Persona{

    // Propiedades o atributos
    public ?string $nombre;
    public ?int $edad;
    public ?string $sexo;

    public function __construct()
    {
        $this->nombre = null;
        $this->edad = null;
        $this->sexo = null;

    }

}

// Creamos un objeto de la clase persona
$persona1 = new Persona();

var_dump($persona1);