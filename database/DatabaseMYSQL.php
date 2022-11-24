<?php
    class DatabaseMYSQL{
        private mysqli $db;
        private string $localhost;
        private string $user;
        private string $pass;
        private string $nameDB;        

        public function __construct($localhost = 'localhost', $user = 'root', $pass = '', $nameDB = 'ranjit')
        {
            $this->localhost = $localhost;    
            $this->user = $user;
            $this->pass = $pass;
            $this->nameDB = $nameDB;
        }

        public function connect(){
            $this->db = new mysqli($this->localhost,$this->user,$this->pass,$this->nameDB);
            if($this->db->connect_errno){
                die("Error al establecer la conexion a la BD -> flutur");
            }
        }

        public function disconnect(){
            $this->db->close();
        }

        public function query($sql){
            return $this->db->query($sql);
        }

        public function getDB(){
            return $this->db;
        }
    }
?>