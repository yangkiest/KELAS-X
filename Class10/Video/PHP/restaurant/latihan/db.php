<?php 

    class DB{

        //Property
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct() 
        {
            echo "functionn construct" . "<br/>";
        }

        //Method
        public function selectData()
        {
        
            echo "select data";

        }

        public function getDatabase()
        {
            // echo $this->database;
            return $this->database; 
        }

        public function tampil() 
        {
            $this->selectData();
        }

        public static function insertData()
        {
        echo "static"; 
        }

    }

    DB::insertData();


    $db = new DB;
    // var_dump($db);
    $db->selectData();
    echo '<br/>';
    echo $db->host . "<br/>";
    // $db->getDatabase();
    echo $db->getDatabase() . "<br/>";
    $db -> tampil();




?>