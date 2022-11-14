<?php
class Entity_Student{
    public $id_acc ;
    public $username;
    public $password;
    public $email;
    public $id_role ;
    public $create_date;
    public $last_login;
    public $active;
    public  function __construct($id_acc, $username, $password, $email,$id_role, $create_date, $last_login, $active)
    {
        Self::$id_acc     = $id_acc;
        Self::$username   = $username;
        Self::$password   = $password;
        Self::$email      = $email;
        Self::$id_role    = $id_role;
        Self::$create_date = $create_date;
        Self::$last_login = $last_login;
        Self::$active     = $active;
    }    
}
?>