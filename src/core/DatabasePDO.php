<?php

class DatabasePDO{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if(self::$connection === null){
            require_once "src/config.php";
            try {
                self::$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die (json_encode(['error' => 'Metodo no implementado', 'code' => 501, 'errorUrl' => 'https://http.cat/501']));
            }
        }
        return self::$connection;
    }
}