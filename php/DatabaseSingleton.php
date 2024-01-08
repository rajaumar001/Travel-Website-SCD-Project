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

    // Singleton pattern: ensures only one instance of the class is created
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Getter method to access the mysqli object
    public function getMySQLi() {
        return $this->mysqli;
    }
}
?>
