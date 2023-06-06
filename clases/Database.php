<?php 
    namespace App;
    class Database{
        private $conn;
        private $settings;
        public function __construct($setting) {
            $this->settings = $setting;
        }
        
        public function getConnection($dbKey) {
            $dbConfig = $this->settings[$dbKey];
            $this->conn = null;
           // $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";
            try{
                $this->conn = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['flags']);
                echo 'ok';
            }catch(\PDOException $exception){
                $error=[[
                    'error' => $exception->getMessage(),
                    'message' => 'Error al momento de establecer conexion'
                ]];
                return $error;
            }
            return $this->conn;
        }

    }
?>