<?php
class Coche
{
    private int $velocidad = 0;
    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }
}
class Deportivo extends Coche
{
    public function aumentarVelocidad(): void
    {
        // Error: el atributo es privado de Coche; Deportivo no lo ve
        $this->velocidad = $this->velocidad * 2;
    }
}
$coche = new Coche();

$coche -> velocidad = 1000;
