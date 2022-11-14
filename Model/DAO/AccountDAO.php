<?php
    include "config/Database.php";
    include "Helper/Format.php";
class AccountDAO {


    public static $db; 
    public static $fm;    
    public function __construct()
    {
        self::$db = new Database();
        self::$fm = new Format();
    }
    public function GetAllAccount()
    {
        $query = "SELECT * FROM account ";
        $result = self::$db->Select($query);
        if( $result != false ){

            $i = 0;
            while ($row = $result->fetch_array() ){
                $id_acc     = $row['id_acc '];
                $username   = $row['username'];
                $password   = $row['password'];
                $email      = $row['email'];
                $id_role    = $row['id_role  '];
                $create_date = $row['create_date'];
                $last_login = $row['last_login'];
                $active     = $row['active'];
                while ($i != $id_acc ) $i++;
                $students[$i++] = new Entity_Student($id, $name, $age, $university);
            }
            return $students;
        }
        return false;
    }
    public function GetAccountbyIdacc($Id_ac)
    {
        $allStudent = $this->GetAllAccount();
        return $allStudent[$Id_ac];
    }
    public function CreateAcc($username, $password, $email, $idrole, $create, $lastlogin, $active)
    {
        $query = "INSERT INTO account('username', 'password', 'email', 'id_role', create_date', 'last_login', 'active')
        VALUES ('$username','$password','$email','$idrole','$create','$lastlogin','$active')";



    }
    public function UpdateAcc($Id_ac)
    {
        
    }
    public function DeleteAcc($Id_ac)
    {
        
    }
}

?>