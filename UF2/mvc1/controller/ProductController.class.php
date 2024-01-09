<?php
//crido de manera general tot el que necessitaré cridar

require_once "controller/ControllerInterface.php";
require_once "view/ProductView.class.php";
require_once "model/persist/ProductDAO.class.php";
require_once "model/Product.class.php";
require_once "util/ProductMessage.class.php";
require_once "util/ProductFormValidation.class.php";

class ProductController implements ControllerInterface {

    //atributs que segur que tindran tots els controladors
    private $view;
    private $model;

    //constructor del controlador. Instancia objectes de les classes de la vista i el model necessàries per poder 
    //comunicar aquest controlador amb la resta

    public function __construct() {

        // càrrega de la vista
        $this->view=new ProductView();

        // càrrega del model de dades
        $this->model=new ProductDAO();
    }

    // aquest mètode el tenen tots els nostres controladors
    // serveix per saber en quin lloc del menú estem

    public function processRequest() {
        
        //inicialitzem 3 variables que necessitarem
        $request=NULL; //aquest NULL serveix per al cas que sigui la primera vegada que hi entrem, sinó valdrà $_POST["action"] o $_GET["option"]
        $_SESSION['info']=array(); //per donar sortida a tots els missatges generals d'informació
        $_SESSION['error']=array(); ////per donar sortida a tots els missatges d'error
        
        // recupera l'acció SI VENIM DES D'UN FORMULARI --> PER POST, o bé
        // recupera l'opció SI VENIM D'UNA OPCIÓ DEL MENÚ--> PER GET
        //només hi pot haver una d'aquestes dues situacions,
       

        $request=isset($_POST["action"])?$_POST["action"]:NULL;
        if(isset($_POST["action"])){
            $request=$_POST["action"];
        }else if(isset($_GET["option"])){
            $request=$_GET["option"];
        }
        
                
        //mirem totes les opcions d'action o d'option ASSIGNADES a la variable $request
        switch ($request) {
            case "list_all"://opció de menu que trobem a MainMenu.html, menú de la vista que carreguem el primer cop amb el display
                $this->listAll();
                break;

            case "form_add"://opció de menu que trobem a MainMenu.html, menú de la vista que carreguem el primer cop amb el display
                $this->formAdd();
                break;

            case "add": //opció de formulari
                $this->add();
                break;
           
            default: //en el cas que vinguem per primer cop a categories o no haguem escollit res de res, $request=NULL;
                $this->view->display(); //mètode de la classe productView.class.php
        }
    }

//carrega el llistat de totes les categories
    public function listAll() {
        $product=array();
        //necessitem cridar al model
        $product=$this->model->listAll();
        
        if (!empty($product)) { // array void or array of product objects?
            $_SESSION['info']=ProductMessage::INF_FORM['found'];
        }
        else {
            $_SESSION['error']=ProductMessage::ERR_FORM['not_found'];
        }
        
        $this->view->display("view/form/ProductList.php", $product);
    }

    
// carrega el formulari d'insertar categoria
    public function formAdd() {
        $this->view->display("view/form/ProductFormAdd.php"); //li passem la variable que es diu $template a la vista productView.class.php
    }

// ejecuta la acción de insertar categoría
    public function add() {
       //validem i omplim missatges d'error, si n'hi hagués
        $productValid=ProductFormValidation::checkData(ProductFormValidation::ADD_FIELDS);        
        
        //si no hi ha declarat cap sessió d'error
        if (empty($_SESSION['error'])) {
            //busco per id, a veure si n'hi ha un altre d'igual
            $product=$this->model->searchById($productValid->getId());

            //si no hem trobat l'id...
            if (is_null($product)) {
                //afegim la categoria a l'arxiu
                $result=$this->model->add($productValid);

                if ($result == TRUE) {
                    $_SESSION['info']=ProductMessage::INF_FORM['insert'];
                    $productValid=NULL;
                }
            }
            else {
                $_SESSION['error']=ProductMessage::ERR_FORM['exists_id'];          
            }
        }

        $this->view->display("view/form/ProductFormAdd.php", $productValid);
    }

//aquests mètodes els deixem ara per ara així
    public function modify(){
//to do
    }
    public function delete(){
//to do
    }
    public function searchById(){
//to do
    }
    /*
    // carregaria el formulari de modificar si el programessim al menú  
    public function formModify() {
        $this->view->display("view/form/productFormModify.php");
    }    

    // executaria la modificació si el programessim al menú 
    public function modify() {
        $productValid=productFormValidation::checkData(productFormValidation::MODIFY_FIELDS);        
        
        if (empty($_SESSION['error'])) {
            $product=$this->model->searchById($productValid->getId());

            if (!is_null($product)) {            
                $result=$this->model->modify($productValid);

                if ($result == TRUE) {
                    $_SESSION['info']=productMessage::INF_FORM['update'];
                }
            }
            else {
                $_SESSION['error']=productMessage::ERR_FORM['not_exists_id'];
            }
        }
        
        $this->view->display("view/form/productFormModify.php", $productValid);        
    }

    // ejecuta la acción de eliminar categoría    
    public function delete() {
        $productValid=productFormValidation::checkData(productFormValidation::DELETE_FIELDS);
        
        if (empty($_SESSION['error'])) {
            $product=$this->model->searchById($productValid->getId());

            if (!is_null($product)) {            
                $result=$this->model->delete($productValid->getId());

                if ($result == TRUE) {
                    $_SESSION['info']=productMessage::INF_FORM['delete'];
                    $productValid=NULL;
                }
            }
            else {
                $_SESSION['error']=productMessage::ERR_FORM['not_exists_id'];
            }
        }
        
        $this->view->display("view/form/productFormModify.php", $productValid);
    }

    
    

    // ejecuta la acción de buscar categoría por id de categoría
    public function searchById() {
        $productValid=productFormValidation::checkData(productFormValidation::SEARCH_FIELDS);
        
        if (empty($_SESSION['error'])) {
            $product=$this->model->searchById($productValid->getId());

            if (!is_null($product)) { // is NULL or product object?
                $_SESSION['info']=productMessage::INF_FORM['found'];
                $productValid=$product;
            }
            else {
                $_SESSION['error']=productMessage::ERR_FORM['not_found'];
            }
        }
            
        $this->view->display("view/form/productFormModify.php", $productValid);
    }    

    // carga el formulario de buscar productos por nombre de categoría
    public function formListProducts() {
        $this->view->display("view/form/productFormSearchProduct.php");
    }    
    
    // ejecuta la acción de buscar productos por nombre de categoría
    public function listProducts() {
        $name=trim(filter_input(INPUT_POST, 'name'));

        $result=NULL;
        if (!empty($name)) { // product Name is void?
            $result=$this->model->listProducts($name);            

            if (!empty($result)) { // array void or array of Product objects?
                $_SESSION['info']="Data found"; 
            }
            else {
                $_SESSION['error']=productMessage::ERR_FORM['not_found'];
            }
            
            $this->view->display("view/form/productListProduct.php", $result);
        }
        else {
            $_SESSION['error']=productMessage::ERR_FORM['invalid_name'];
            
            $this->view->display("view/form/productFormSearchProduct.php", $result);
        }
    }
    */
}
