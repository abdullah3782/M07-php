<?php

// EJEMPLO 1: Crear o definir una clase

class Contacto 
{
    // Variables o atributos
    var $nombre;
    var $apellidos;
    var $fechaDeNacimiento;
    var $email;

    // Funciones o métodos GETTERS & SETTERS

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($miNombre){
        $this->nombre = $miNombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }
  
    function setApellidos($miApellidos){
        $this->apellidos = $miApellidos;
    }

    function setFechaDeNacimiento($miFechaDeNacimiento){
        $this->fechaDeNacimiento = $miFechaDeNacimiento;
    }

    function esMenor(){
        $hoy = new DateTime();
        $nacimiento = DateTime::createFromFormat('d/m/Y', $this->fechaDeNacimiento);

        $edad = $hoy->diff($nacimiento)->format('%y');

        return $edad < 18;
    }

    function getFechaDeNacimiento(){
        return $this->fechaDeNacimiento;
    }

    function setEmail($miEmail){
        $this->email = $miEmail;
    }

    function getEmail(){
        if ($this->esMenor() || $this->email === null){
            return "Menor de Edad" . $this->getFechaDeNacimiento();
        } else {
            return $this->email;
        }
    }
    

    function getEdad() {
        $hoy = new DateTime();
        $nacimiento = DateTime::createFromFormat('d/m/Y', $this->fechaDeNacimiento);

        return $hoy->diff($nacimiento)->y;
    }
}

// Crear los contactos
$contacto1 = new Contacto;
$contacto1->setNombre("Abdullah");
$contacto1->setApellidos("Butt");
$contacto1->setFechaDeNacimiento("13/01/2004");
$contacto1->setEmail("abdullah.butt0@gmail.com");

$contacto2 = new Contacto;
$contacto2->setNombre("Adrián");
$contacto2->setApellidos("Molina");
$contacto2->setFechaDeNacimiento("3/03/2002");
$contacto2->setEmail("adr.molinita@gmail.com");

$contacto3 = new Contacto;
$contacto3->setNombre("Alejandro");
$contacto3->setApellidos("Paz");
$contacto3->setFechaDeNacimiento("31/07/2020");
$contacto3->setEmail("ale.peace@gmail.com");

// Crear un array con los contactos
$contactos = [$contacto1, $contacto2, $contacto3];

// Ordenar el array por edad
usort($contactos, function ($a, $b) {
    return $a->getEdad() - $b->getEdad();
});

// Mostrar el listado ordenado por edad
echo "<h1>Listado de Contactos Ordenados por Edad</h1>";

foreach ($contactos as $contacto) {
    echo "<strong>" . $contacto->getNombre() . " " . $contacto->getApellidos() . "</strong> ha nacido el 
        <strong>" . $contacto->getFechaDeNacimiento() . " y su mail es " . $contacto->getEmail() . "</strong><br>";
}

?>
