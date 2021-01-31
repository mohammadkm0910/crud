<?php


namespace Application\Controller;

use Application\Model\UsersModel;
class Home extends Controller
{
    public function index()
    {
        $um = new UsersModel();
        $all = $um->all();
        $this->view("index",compact("all"));
    }
    public function create()
    {
        $this->view("create");
    }
    public function store()
    {
        $um = new UsersModel();
        $um->insertUser($_POST);
        $this->redirect("home");
    }
    public function show($id)
    {
        $um = new UsersModel();
    }
    public function edit($getId){
        $this->view("edit",compact("getId"));
    }
}