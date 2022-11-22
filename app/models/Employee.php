<?php

class Employee{
    protected $table = "employee";
    public $errors = [];

    protected $allowedColumns = [
        'EmployeeID',
        'Firstname',
        'Lastname',
        'Email',
        'Password',
        'Role',
        'Contactno',
        'Image',
    ];
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['Email'])) {
            $this->errors['email'] = "An email is required";
        }
        if (empty($data['Firstname'])) {
            $this->errors['Firstname'] = "A first name is required";
        }
        if (empty($data['Lastname'])) {
            $this->errors['Lastnname'] = "A last name is required";
        }
        if (!empty($data['Password'])) {
            if ($data['Password'] != $data['conpassword']) {
                $this->errors['Password'] = "Passwords do not match";
            }
        } else {
            $this->errors['Password'] = "A password is required";
        }
        if (empty($data['Contactno'])) {
            $this->errors['Contactno'] = "A contact number is required";
        }
        if (empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function insert($data)
    {
        if (!empty($this->allowedColumns)) {
            show($data); 
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
            show($data);
        }

        // show($_FILES);

        $target_dir = "../public/uploads/images";
        $target_file = $target_dir ."/". basename($_FILES["Image"]["name"]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["Image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["Image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["Image"]["name"])) . " has been uploaded.";
                $data['Image'] = $target_file;
                $keys = array_keys($data);


                $query = "Insert into employee";
                $query .= "(" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

                $db = new Database();

                show($query);
                $db->query($query, $data);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}