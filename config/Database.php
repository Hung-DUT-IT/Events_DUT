<?php 
class Database{
    public static $servername  = "localhost";
    public static $username    = "root";
    public static $password    = "";
    public static $db          = "event_dut";

    public static $conn = null;
    public static $error;

    public function __construct()
    {
        self::connectDB();
    }
    private function connectDB()
    {
        self::$conn = new mysqli( self::$servername, self::$username, self::$password, self::$db );
        if(!self::$conn)
        {
            self::$error = "Connection Fail ".self::$conn->connect_error ;
            return false; 
        }
        echo "Connected successfully";
    }
    function DB_close(){
        mysqli_close(self::$conn);
    }
    public function Select($query)
    {
        //self::$conn->query($query)
        $result  = mysqli_query(self::$conn, $query )  or die (self::$conn->error.__Line__);
        if ($result->num_rows > 0)
        {
            return $result;
        }
        else 
        {
            return false ;
        }
    }
    public function Insert($query)
    {
        $insert_row  = self::$conn->query($query) or die (self::$conn->error.__Line__);
        if ($insert_row)
        {
            return $insert_row;
        }
        else 
        {
            return false ;
        }
    }
    public function Update($query)
    {
        $update_row  = self::$conn->query($query) or die (self::$conn->error.__Line__);
        if ($update_row)
        {
            return $update_row;
        }
        else 
        {
            return false ;
        }
    }
    public function Delete($query)
    {
        $delete_row  = self::$conn->query($query) or die (self::$conn->error.__Line__);
        if ($delete_row)
        {
            return $delete_row;
        }
        else {
            return false ;
        }
    }
}
?>