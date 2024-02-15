<?php
include dirname(__DIR__, 1) . '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Conexion
{

    public function BD()
    {
        try {

            $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
            $dotenv->load();

            $DB_SERV = $_ENV["DB_SERV"];
            $DB_USER = $_ENV["DB_USER"];
            $DB_PASS = $_ENV["DB_PASS"];
            $DB_NAME = $_ENV["DB_NAME"];

            $conexion = new PDO('mysql:host=' .  $DB_SERV . ';dbname=' . $DB_NAME . '', $DB_USER, $DB_PASS);
            return $conexion;
        } catch (PDOException $e) {
            die("Connection failed: $e");
        }
    }
}
