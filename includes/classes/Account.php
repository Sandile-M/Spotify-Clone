<?php
    class Account{

        private $errorArray;
        private $connection;

        public function __construct($connection){
            $this->connection = $connection;
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUserName($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em ,$em2);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray)){
                //Insert into db
                return  insertUserDatails($un, $fn, $ln, $em, $pw);
            }
            else{
                return false;
            }
        }

        public function  getError($error)
        {
            if(!in_array($error, $this->errorArray)){
                $error = "";
            }
            return "<span class= 'errorMessage'>$error</span>";

        }

        private function insertUserDatails($un, $fn, $ln, $em, $pw)
        {
            $encryptedPw = md5($pw); //Password-> will return a big long string of numbers & letters
            $profilePic = "assets/images/profile-pics/Pro-Pic-Example.png";
            $date = date("Y-m-d");

            $result = mysqli_query($this->connection, "INSERT INTO users VALUES ('','$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");

            return $result;
        }

        private function validateUserName($un)
        {
            if (strlen($un) >25 || strlen($un) <5){
                array_push($this->errorArray, Constants::$userNameCharacters);
                return;
            }

            //TODO: check if username exists [Done when the username table is setup]
        }

        private function validateFirstName($fn)
        {
            if (strlen($fn) >25 || strlen($fn) <2){
                array_push($this->errorArray, Constants::$firstNameCharacters);
                return;
            }

        }

        private function validateLastName($ln)
        {
            if (strlen($ln) >25 || strlen($ln) <2){
                array_push($this->errorArray, Constants::$lastNameCharacters);
                return;
            }

        }

        private function validateEmails($em , $em2)
        {
            if($em != $em2){
                array_push($this->errorArray, Constants::$emailsDoNotMatch);
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            //TODO: Check that username hasn't already been used

        }

        private function validatePasswords($pw , $pw2)
        {
            if($pw != $pw2){
                array_push($this->errorArray, Constants::$passwordsDoNotMatch);
                return;
            }

            if(preg_match("/[^A-Za-z0-9]/", $pw)){
                array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
                return;
            }

            if (strlen($pw) >30 || strlen($pw) <5 ){
                array_push($this->errorArray, Constants::$passwordCharacters);
                return;
            }

        }
    }
?>