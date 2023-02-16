<?php
class Database
{
    private static $pdo = null;

    const DB_HOST = "127.0.0.1";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_DATABASE = "paoecirco";

    public static function getConnection()
    {
        if(!self::$pdo)
        {
            try {
                self::$pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_DATABASE.";charset=utf8mb4", self::DB_USER, self::DB_PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e) {
                die("Falha na conexão com o banco de dados:<br>".$e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>