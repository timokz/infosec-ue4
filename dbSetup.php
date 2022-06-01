<?php

    $db = new mysqli("localhost", "root", "", "infsec") or die("Fehler bei Datenbankverbindung");
    
    class Database {

        protected $connection;

        public function __construct() {

            global $db;
            $this->connection = &$db;
    
        }
    
        public function __destruct() {
    
            $this->connection->close();
    
        }

        public function login($uaccount, $password) {

            $password = md5($password);
            $query = "SELECT uid, isAdmin FROM user WHERE uid = '$uaccount' AND password = '$password'";
            $result = $this->connection->query($query) or die(mysqli_error($this->connection));

            if($result->num_rows == 1) {

                $row = $result->fetch_assoc();

                return [true, $row["isAdmin"], $row["uid"]];

                if($dbPassword == $password) return [true, $row["isAdmin"]];

            } 

            return [false, false, ""];

        }

        public function getStudents() {
            $query = "SELECT * FROM students";
            $result = $this->connection->query($query) or die("Error on selecting students");

           return $result;
        }

        public function delStudent($uid){
            $query = "DELETE FROM students WHERE uid ='" . $uid . "'";
            $result = $this->connection->query($query) or die("Error on updating grades");
        }

        public function getGrades(){
            $query = "SELECT * FROM `students` INNER JOIN grades on grades.uid = students.uid";
            $result = $this->connection->query($query) or die("Error on selecting grades");
            return $result;
        }

        public function updateGrade($uid, $grade){
            $query = "UPDATE grades SET grade ='$grade' WHERE grades.uid = '$uid'";
            $result = $this->connection->query($query) or die("Error on updating grades");
        }

        public function getUsers(){
            $query = "SELECT * FROM user";
            $result = $this->connection->query($query) or die("Error on selecting users");

            return $result;
        }

    }

    $databaseHelper = new Database();

?>