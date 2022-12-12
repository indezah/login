<?php

class Model extends Database
{
    public function insert($data)
    {
        if (!empty($this->allowedColumns)) {
            show($data);
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }
        show($_FILES);

        if ($_FILES['Image']['size'] != 0 && $_FILES['Image']['tmp_name'] != '') {
            $file = $_FILES['Image'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 100000000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = "../public/uploads/images/" . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $data['Image'] = $fileDestination;
                        // show($data);        
                        $keys = array_keys($data);
                        $query = "Insert into " . $this->table;
                        $query .= "(" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

                        // $db = new Database();

                        show($query);
                        $this->query($query, $data);
                    } else {
                        echo "Your file is too big!";
                    }
                } else {
                    echo "There was an error uploading your file!";
                }
            } else {
                echo "You cannot upload files of this type!";
            }
        } else {
            echo "Please select a file!";
            $keys = array_keys($data);
            $query = "Insert into " . $this->table;
            $query .= "(" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

            // $db = new Database();

            show($query);
            $this->query($query, $data);
        }
    }
    
    public function update($id, $data)
    {
        if (!empty($this->allowedColumns)) {
            show($data);
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "update " . $this->table . " set ";

        foreach ($keys as $key) {
            $query .= $key . "=:" . $key . ",";
        }
        $query = trim($query, ",");
        $query .= " where SupplierID = $id";


        $this->query($query, $data);
    }

    public function where($data)
    {

        $keys = array_keys($data);

        $query = "SELECT * FROM " . $this->table . " WHERE ";
        foreach ($keys as $key) {
            $query .= $key . "=:" . $key . "&& ";
        }

        $query = trim($query, "&& ");

        $res = $this->query($query, $data);

        if (is_array($res)) {
            return $res;
        }
        return false;
    }
    public function first($data)
    {

        $keys = array_keys($data);

        $query = "SELECT * FROM " . $this->table . " WHERE ";
        foreach ($keys as $key) {
            $query .= $key . "=:" . $key . "&& ";
        }

        $query = trim($query, "&& ");
        $query .= " ORDER BY SupplierID desc LIMIT 1";

        $res = $this->query($query, $data);

        if (is_array($res)) {
            return $res[0];
        }
        return false;
    }
}
