<?php 

class Db{ 
    private static $con;

    public static function getConexion(){
        if(self::$con==null){
            self::$con=new mysqli("localhost", "root", "", "academia");
            if(self::$con->connect_errno){
                echo "Fallo al conectar a MySQL: (" . self::$con->connect_errno . ") " . self::$con->connect_error;
            }
        }
        return self::$con;
    }
}
