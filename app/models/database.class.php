<?php
class Database{
    //establece variables de conexion
    private static $connection = null;
    private static $statement = null;
    private static $id = null;
    private static $error = null;

    private function connect(){
        $server = "localhost";// se elige el tipo de servidor
        $database = "waifuhouse";//se elige la base de datos a utilizar
        $username = "root";//se elige el usuario de la base de datos
        $password = "";//se coloca la clave del usuario
        try{
            //se hace la consulta para poder ingresar a la base
            @self::$connection = new PDO("mysql:host=$server; dbname=$database; charset=utf8", $username, $password);
        }catch(PDOException $exception){
            throw new Exception($exception->getCode());
        }
    }

    private function desconnect(){
        //se crea una funcion por si la base se desconecta
        self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }
    //se crea
    public static function executeRow($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::$id = self::$connection->lastInsertId();
        self::desconnect();
        return $state;
    }
    //toma una fila de la base de datos segun la consulta
    public static function getRow($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetch();
    }
    //sql injection
    public static function getRows($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetchAll();
    }
    //toma la fila del id
    public static function getLastRowId(){
        return self::$id;
    }
    //se crea una funcion por si da error
    public static function getException(){
        if(self::$error[0] == "00000"){
            return false;
        }else{
            print_r(self::$error);
            return self::$error[1];
        }
    }
}
?>