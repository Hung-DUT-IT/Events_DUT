<?php
    include "config/Session.php";
    Session::CheckLogin();
    include "config/Database.php";
    include "Helper/Format.php";
class Handle_Login {

    public static $db; 
    public static $fm;    
    public function __construct()
    {
        self::$db = new Database();
        self::$fm = new Format();
    }
    public function login($username, $password)
    {
        // $username = self::$fm->validation($username);
        // $password = self::$fm->validation($password);

        // $username = mysqli_real_escape_string(self::$db::$conn, $username);
        // $password = mysqli_real_escape_string(self::$db::$conn, $password );

        if ( empty($username) ||  empty($username))
        {
            $alert = "Username or Password must be not empty ";
            return $alert;
        }
        else 
        {
            $query = "select * from account where username = '$username' and password = '$password' limit 1 ";
            $result = self::$db->Select($query);

            if( $result != false ){

                $value = $result->fetch_assoc();
                Session::set("login", true);
                Session::set("id_acc", $value['id_acc']);
                Session::set("email" , $value['id_acc']);
                Session::set("username", $value['username']);
                Session::set("id_role" , $value['id_role']);
                header('Location:http://localhost:3000/Events_DUT/index.php');
            }
            else{
                $alert = "Username or Password not match ";
                return $alert;
            }
        }
    }
    public function Check_login()
    {
        
    }
    public function Logout()
    {
        
    }
}
?>