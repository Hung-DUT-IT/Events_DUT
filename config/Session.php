<?php
class Session{
    public static function init()
    {
        //session_start();
        // if ( php_sapi_name() !== 'cli' ) {
        //     if ( version_compare(phpversion(), '5.4.0', '>=') ) {
        //         return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        //     } else {
        //         return session_id() === '' ? FALSE : TRUE;
        //     }
        // }
        // return FALSE;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
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
            header("http://localhost:3000/Events_DUT/login.php");
        }
    }
    public static function CheckLogin()
    {
        self::init();
        if(self::get("login") == true )
        {
            header("http://localhost:3000/Events_DUT/index.php");
        }
    }
    public static function Destroy()
    {   
        session_destroy();
        header("http://localhost:3000/Events_DUT/login.php");
    }
}
?>