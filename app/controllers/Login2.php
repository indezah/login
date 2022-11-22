<?php

class Login2 extends Controller{
    public function index(){
        $data['errors'] = [];
        $employee = new Employee();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $row = $employee->where('Email',$_POST['email']);

            if($row){
//                show($row);
                if($row[0]->Password === $_POST['password']){
                    $_SESSION['USER_DATA'] = $row[0];
//                    show($_SESSION);
                    $this->redirect("/home");
                }
            }
            $data['errors']['email'] = "Wrong email or password";
        }
        $this->view('login2',$data);
    }
}