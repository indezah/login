<?php

class Database
{
    private function connect()
    {
        $str = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($str, DBUSER, DBPASS);
        return $con;
    }

    public function query($query, $data = [], $type = 'object')
    {
        $con = $this->connect();

        $stm = $con->prepare($query);

        if ($stm) {

            $check = $stm->execute($data);
            if ($check) {
                if ($type != 'object') {
                    $type = PDO::FETCH_ASSOC;
                }else{
                    $type = PDO::FETCH_OBJ;

                }
                $result = $stm->fetchAll($type);
                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }
        return false;
    }

    public function createTable(){

        $query = "
            	CREATE TABLE IF NOT EXISTS `customer` (
                `CustomerID` char(60) NOT NULL,
                `Firstname` char(30) NOT NULL,
                `Lastname` char(30) NOT NULL,
            	`Gender` char(6) NOT NULL,
                `Email` varchar(100) NOT NULL,
                `Password` varchar(255) NOT NULL,
                `Address` varchar(200) NOT NULL,
                `Mobileno` char(10) NOT NULL,
                `Date` timestamp NOT NULL DEFAULT current_timestamp(),
                PRIMARY KEY (`CustomerID`),
                KEY `CustomerID` (`CustomerID`),
                KEY `Firstname` (`Firstname`),
                KEY `Lastname` (`Lastname`),
                KEY `Email` (`Email`),
                KEY `Address` (`Address`),
                KEY `Mobileno` (`Mobileno`),
                KEY `Date` (`Date`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1
        ";

        $this->query($query);

    }
}
