<?php

class Contacto
{
    private $nombre;
    private $apellidos;
    private $fechaNacimiento;
    private $email;

    public function __construct($nombre, $apellidos, $fechaNacimiento, $email)
    {
        if ($nombre !== null && $apellidos !== null && $fechaNacimiento !== null) {
            $this->nombre = $nombre ;
            $this->apellidos = $apellidos;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->email = $email;


            if ($email === null) {
                $edad = $this->getEdad();

                if ($edad >= 18) {
                    $this->email = null;
                } else {
                    $this->email = "menor de edad";
                }
            } else {
                $this->setEmail($email);
            }
        } else {
            // No creamos el contacto si alguno de los valores es null
            throw new InvalidArgumentException("Todos los valores deben ser proporcionados");
        }
    }

    public function setEmail($email)
    {
        // Verificamos si la edad es inferior a 18
        $fechaNacimiento = new DateTime($this->fechaNacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNacimiento)->y;

        // Asignamos el email o "menor de edad"
        $this->email = ($edad < 18) ? "menor de edad" : $email;
    }

    public function getEdad()
    {
        $fechaNacimiento = new DateTime($this->fechaNacimiento);
        $hoy = new DateTime();
        return $hoy->diff($fechaNacimiento)->y;
    }

    public function getContactoInfo()
    {
        if ($this->email !== null) {
            return "Nombre: $this->nombre, Apellidos: $this->apellidos, Edad: {$this->getEdad()}, Email: $this->email\n";
        } else {
            return ""; 
        }
    }
}

?>
