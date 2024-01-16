<?php

require_once("./Funciones_importantes/funcions.php");
require_once("./Funciones_importantes/funcions_archivos.php");
require_once("./Funciones_importantes/funcions_array.php");


class Jugador
{

    public function __construct($nombre = NULL, $pais = NULL, $numCamiseta = NULL, $fechaDeNacimiento = NULL, $rol = NULL, $numDeGoles = NULL, $numeroDePartidosJugados = NULL)
    {
        $this->nombre = $nombre;
        $this->pais = $pais;
        $this->numCamiseta = $numCamiseta;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->rol = $rol;
        $this->numDeGoles = $numDeGoles;
        $this->numeroDePartidosJugados = $numeroDePartidosJugados;
    } 

    var $nombre;
    var $pais;
    var $numCamiseta;
    var $fechaDeNacimiento;
    var $rol;
    var $numDeGoles;
    var $numeroDePartidosJugados;

    // Funciones o métodos GETTERS & SETTERS

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setPais($pais)
    {
        $this->pais = $pais;
    }

    function getPais()
    {
        return $this->pais;
    }

    function setNumCamiseta($numCamiseta)
    {
        $this->numCamiseta = $numCamiseta;
    }

    function getNumCamiseta()
    {
        return $this->numCamiseta;
    }

    function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    function setRol($rol)
    {
        $this->rol = $rol;
    }

    function getRol()
    {
        return $this->rol;
    }

    function setNumDeGoles($numDeGoles)
    {
        $this->numDeGoles = $numDeGoles;
    }

    function getNumDeGoles()
    {
        return $this->numDeGoles;
    }

    function setNumeroDePartidosJugados($numeroDePartidosJugados)
    {
        $this->numeroDePartidosJugados = $numeroDePartidosJugados;
    }

    function getNumeroDePartidosJugados()
    {
        return $this->numeroDePartidosJugados;
    }
    function readCard()
    {
        $file_read = read_info_csv_with_return("plantillaJugadores.csv");
        $card_read = read_info_txt_with_return("templat.txt");

        print($file_read);
    
    }






}
