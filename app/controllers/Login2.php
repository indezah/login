<?php

class Login2 extends Controller
{
    public function index()
    {
        $data['errors'] = [];
        $employee = new SupplierModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $row = $employee->first(['Email' => $_POST['Email']]);

            if ($row) {
                if (password_verify($_POST['Password'], $row->Password)) {
                   Auth::authenticate($row);
                    redirect('home');
                }
            }
            $data['errors']['Email'] = "Wrong Email or Password";
        }

        $this->view('login2', $data);
    }
}
