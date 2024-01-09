<?php

class ProductFormValidation {

    const ADD_FIELDS = array('id','marca','name','descripcio','precio');
    const MODIFY_FIELDS = array('id','marca','name','descripcio','precio');
    const DELETE_FIELDS = array('id');
    const SEARCH_FIELDS = array('id');
    
    const NUMERIC = "/[^0-9]/";
    const ALPHABETIC = "/[^a-z A-Z]/";
    
    public static function checkData($fields) {
        $id=NULL;
        $name=NULL;
        
        foreach ($fields as $field) {
            switch ($field) {
                case 'id':
                    // filter_var retorna los datos filtrados o FALSE si el filtro falla
                    $id=trim(filter_input(INPUT_POST, 'id'));
                    $idValid=!preg_match(self::NUMERIC, $id);
                    if (empty($id)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_id']);
                    }
                    else if ($idValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_id']);
                    }
                    break;
                case 'marca':
                    $marca=trim(filter_input(INPUT_POST, 'marca'));
                    $marcaValid=!preg_match(self::ALPHABETIC, $marca);
                    if (empty($marca)) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['empty_marca']);
                    }
                    else if ($marcaValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_marca']);
                    }
                    break;
                case 'name':
                    // filter_var retorna los datos filtrados o FALSE si el filtro falla
                    $name=trim(filter_input(INPUT_POST, 'name'));
                    $nameValid=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
                    if ($nameValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_name']);
                    }
                    break;
                case 'descripcio':
                    $descripcio=trim(filter_input(INPUT_POST, 'descripcio'));
                    $descripcioValid=filter_var($descripcio, FILTER_SANITIZE_STRING);
                    if ($descripcioValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_descripcio']);
                    }
                    break;

                case 'precio':
                    $precio=trim(filter_input(INPUT_POST, 'precio'));
                    $precioValid=filter_var($precio, FILTER_SANITIZE_STRING);
                    if ($precioValid == FALSE) {
                        array_push($_SESSION['error'], ProductMessage::ERR_FORM['invalid_precio']);
                    }
                    break;
            }
        }
        
        $product=new Product($id,$marca,$name,$descripcio,$precio);
        
        return $product;
    }
    
}
