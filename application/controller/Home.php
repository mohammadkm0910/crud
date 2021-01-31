<?php


namespace Application\Controller;

use Application\Model\UsersModel;
use System\Validation;
class Home extends Controller
{
    private static $error = ["","","","",""];
    private static $val = ["","","","",""];
    public function index()
    {
        $um = new UsersModel();
        $all = $um->all();
        $this->view("index",compact("all"));
    }
    public function create()
    {
        $um = new UsersModel();
        $valid = new Validation();
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            self::$error = array(
                $valid->validName($_POST['name']),
                $valid->validName($_POST['family']),
                $valid->validEmail($_POST['email']),
                $valid->validPhone($_POST['phone']),
                $valid->validAddress($_POST['address']),
            );
            self::$val = array_values($_POST);
            if (empty(array_filter(self::$error))){
                $um->insertUser($_POST);
                $this->redirect("home");
            }
        }
        $this->view("create",["error"=>self::$error,"val"=>self::$val]);
    }
    public function show($id)
    {
        $um = new UsersModel();
    }
    public function edit($getId){
        $this->view("edit",compact("getId"));
    }
}