<?php 

class Db{ 
    private static $con;

    public static function getConexion(){
        if(self::$con==null){
            self::$con=new mysqli("localhost", "root", "", "academia");
            if(self::$con->connect_errno){
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
        }
        return self::$con;
    }
}
