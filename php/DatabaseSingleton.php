<?php
class DatabaseSingleton {
    private static $instance;
    private $mysqli;

    private function __construct() {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'hoteldb';
        $this->mysqli = new mysqli($host, $username, $password, $database);

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getMySQLi() {
        return $this->mysqli;
    }
}
?>
