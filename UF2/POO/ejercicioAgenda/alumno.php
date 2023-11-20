<?php

class Alumno extends Contacto
{
    private $curso;
    private $asignaturas = [];

    public function __construct($nombre, $apellidos, $fechaNacimiento, $email, $curso, $asignaturas)
    {
        parent::__construct($nombre, $apellidos, $fechaNacimiento, $email);
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

}

?>
