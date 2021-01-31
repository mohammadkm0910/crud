<?php


namespace Application\Controller;


class Home extends Controller
{
    public function index()
    {
        $this->view("index");
    }
    public function create()
    {
        $this->view("create");
    }
    public function edit($getId){
        $this->view("edit",compact("getId"));
    }
}