<?php

class Signup2 extends Controller
{
    public function index()
    {
        $data['errors'] = [];

        $user = new SupplierModel();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($user->validate($_POST)) {

                $_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);
               
                $user->insert($_POST);
                message("Succesfully Created");
                redirect("login2");
            }
        }


        $data['errors'] = $user->errors;

        $this->view('signup2', $data);
    }
}
