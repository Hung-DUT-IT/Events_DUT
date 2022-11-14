<?php
class Session{
    public static function init()
    {
        if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
        else if (version_compare(PHP_VERSION, '5.4.0') >= 0)
        {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
        else
        {
            if(session_id() == '') {
                
                session_start();
            }
        }
        self::set("login",false );
    }
    public static function get(string $key)
    {
        if (isset($_SESSION[$key]) ) {
            return $_SESSION[$key];
        }
        return null;
    }
    public static function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function CheckSession()
    {
        self::init();
        if(self::get("login") == false )
        {
            self::Destroy();
            header("Location:http://localhost:3000/Events_DUT/login.php");
        }
    }
    public static function CheckLogin()
    {
        self::init();
        if(self::get("login") == true )
        {
            header("Location:http://localhost:3000/Events_DUT/index.php");
        }
    }
    public static function Destroy()
    {   
        session_unset();
        if (session_status() === PHP_SESSION_ACTIVE)
            session_destroy();
        header("Location:http://localhost:3000/Events_DUT/login.php");
    }
}
?>