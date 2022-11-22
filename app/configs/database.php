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
                } else {
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

    public function createTable()
    {

        $query = "
        CREATE TABLE IF NOT EXISTS `employee` (
        `EmployeeID` char(5) NOT NULL,
        `Firstname` char(30) NOT NULL,
        `Lastname` char(30) NOT NULL,
        `Email` varchar(100) NOT NULL,
        `Password` varchar(256) NOT NULL,
        `Role` char(15) NOT NULL,
        `Contactno` char(10) NOT NULL,
        `Date` timestamp NOT NULL DEFAULT current_timestamp(),
        `Slug` varchar(60) NOT NULL,
        `Image` varchar(1024) DEFAULT NULL,
        PRIMARY KEY (`EmployeeID`),
        KEY `Firstname` (`Firstname`),
        KEY `Lastname` (`Lastname`),
        KEY `Email` (`Email`),
        KEY `Role` (`Role`),
        KEY `Contactno` (`Contactno`),
        KEY `Date` (`Date`),
        KEY `slug` (`Slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

        $this->query($query);
    }
}
