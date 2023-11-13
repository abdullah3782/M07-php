<?php

//EJEMPLO1: Crear o definir una clase

class contacto 
{
    //Variables o atributos

    var $nombre;
    var $apellidos;
    var $fechaDeNacimiento;
    var $email;
    var $menor;

    //Funciones o métodos GETTERS & SETTERS

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

    function getFechaDeNacimiento(){
   if ($this->fechaDeNacimiento < 18 ){

        return $this->menor;

   }else {
    
        return $this->fechaDeNacimiento;
    }
}

  function setFechaDeNacimiento($miFechaDeNacimiento){
   
        $this->fechaDeNacimiento = $miFechaDeNacimiento;
    }
    
    function getEmail(){
        return $this->email;
    }

    function setEmail ($miEmail){
        $this->email = $miEmail;
    }
}
  


    

 


  

//Título
echo "<h1>Ejemplo 1: Definir o instanciar una clase</h1>";

//Instanciar o utilizar una clase
$contacto1 = new contacto;
$contacto2 = new contacto;
$contacto3 = new contacto;


//Accedo a las funciones o métodos set() para configurar el coche 1 (opción 1)
$contacto1->setNombre("Abdullah");
$contacto1->setApellidos("Butt");
$contacto1->setFechaDeNacimiento("13/01/2004");
$contacto1->setEmail("abdullah.butt0@gmail.com");

//Accedo a las funciones o métodos get() para recuperar la información del coche 1 (opción 1)

echo "
      <strong>" . $contacto1->getNombre() . "  " . $contacto1->getApellidos() . "</strong> ha nacido el 
        <strong>" . $contacto1->getFechaDeNacimiento() . " y su mail es " . $contacto1->getEmail() . "</strong>
";

//Accedo directamente a los atributos para configurar el coche 2 (opción 2)
$contacto2->nombre = "Adrián";
$contacto2->apellidos = "Molina";
$contacto2->fechaDeNacimiento = "3/03/2002";
$contacto2->email = "adr.molinita@gmail.com";

//Accedo directamente a los atributos para recuperar la información del coche 2 (opción 2)
echo "  <br> <br>
        <strong>" . $contacto2->nombre . "  " . $contacto2->apellidos . "</strong> ha nacido el 
        <strong>" . $contacto2->fechaDeNacimiento . " y su mail es  " . $contacto2->email . "</strong> 
      
";



$contacto3->nombre = "Alejandro";
$contacto3->apellidos = "Paz";
$contacto3->fechaDeNacimiento = "31/07/2020";
$contacto3->email = "ale.peace@gmail.com";

//Accedo directamente a los atributos para recuperar la información del coche 2 (opción 2)
echo "  <br> <br>
        <strong>" . $contacto3->nombre . "  " . $contacto3->apellidos . "</strong> ha nacido el 
        <strong>" . $contacto3->fechaDeNacimiento . " y su mail es  " . $contacto3->email . "</strong> 
      
";



?>