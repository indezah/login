<?php

class Signup2 extends Controller
{
    public function index()
    {
        $user = new Employee();
        if ($user->validate($_POST)) {
            $user->insert($_POST);
        } 
        
        show($user->errors);
        show($_POST);
        $this->view('signup2');
    }
}
