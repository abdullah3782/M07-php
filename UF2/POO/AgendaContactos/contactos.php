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
        if ($this->esMenor()){
            return "Menor de Edad ";
        } else {
            return $this->email;
        }
    }
}
  
// Título
echo "<h1>Ejemplo 1: Definir o instanciar una clase</h1>";

// Instanciar o utilizar una clase
$contacto1 = new Contacto;
$contacto2 = new Contacto;
$contacto3 = new Contacto;

// Accedo a las funciones o métodos set() para configurar el contacto 1
$contacto1->setNombre("Abdullah");
$contacto1->setApellidos("Butt");
$contacto1->setFechaDeNacimiento("13/01/2004");
$contacto1->setEmail("abdullah.butt0@gmail.com");

// Accedo a las funciones o métodos get() para recuperar la información del contacto 1
echo "<strong>" . $contacto1->getNombre() . "  " . $contacto1->getApellidos() . "</strong> ha nacido el 
        <strong>" . $contacto1->getFechaDeNacimiento() . " y su mail es " . $contacto1->getEmail() . "</strong>";

// Accedo directamente a los atributos para configurar el contacto 2
$contacto2->nombre = "Adrián";
$contacto2->apellidos = "Molina";
$contacto2->setFechaDeNacimiento("3/03/2002");
$contacto2->email = "adr.molinita@gmail.com";

// Accedo directamente a los atributos para recuperar la información del contacto 2
echo "<br><br><strong>" . $contacto2->nombre . "  " . $contacto2->apellidos . "</strong> ha nacido el 
        <strong>" . $contacto2->getFechaDeNacimiento() . " y su mail es  " . $contacto2->getEmail() . "</strong>";

$contacto3->nombre = "Alejandro";
$contacto3->apellidos = "Paz";
$contacto3->setFechaDeNacimiento("31/07/2020");
$contacto3->email = "ale.peace@gmail.com";

// Accedo directamente a los atributos para recuperar la información del contacto 3
echo "<br><br><strong>" . $contacto3->nombre . "  " . $contacto3->apellidos . "</strong> ha nacido el 
        <strong>" . $contacto3->getFechaDeNacimiento() . " y su mail es  " . $contacto3->getEmail() . "</strong>";

?>
