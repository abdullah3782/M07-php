<?php

require_once("model/Config.php");

class DBConnection
{
    //atributs 
    private $dbh;



    //mètode que necessitem per connectar-nos des dels altres
    //mètodes
    public function connect()
    {
        $flag = true;
        $config_db = new Config();
        try {
            $this->dbh = new PDO($config_db->dsn, $config_db->user, $config_db->password);
        } catch (PDOException $e) {
            $flag = false;
        }
        return $flag;
    }

    //ens desconnectem de la base de dades
    private function disconnect()
    {
        $this->dbh = null;
    }

    public function myQuery($sql, $vector)
    {
        $sentencia = null;
        //select, insert, update,delete
        if ($this->connect()) {

            try {
                $sentencia = $this->dbh->prepare($sql);
            } catch (PDOException $e) {
            }

            if ($sentencia->execute($vector) != false) {
                $this->disconnect();
            }
        }

        return $sentencia;
    }
}
