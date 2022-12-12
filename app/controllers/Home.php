<?php

class Home extends Controller
{
    public function index()
    {

        $db = new Database();
        $db->createTable();
        $this->view('home');
    }
}
