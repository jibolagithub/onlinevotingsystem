<?php
include_once $classes_redirect."Dbh.php";

class Candidates extends Dbh {

    public function login_exists_db($telephone, $password){
        //connection
        $conn = $this -> getConnection();

        //sanitizing
        $telephone = htmlentities($telephone);
        $password = htmlentities($password);

        $query = "SELECT * FROM users WHERE Telephone = ? AND Password = ?";
        $stmt = $conn -> prepare($query);
        $stmt->execute([$telephone, $password]);

        if ($stmt->rowCount() == 1){
            return true;
        }else{
            return false;
        }

    }

    public function add_candidate_db($first_name, $last_name, $department, $VoteCount, $telephone, $Content){
        //connection object
        $conn = $this->getConnection();
        
        //sanitizing fields
        $first_name = htmlentities($first_name);
        $last_name = htmlentities($last_name);
        $department = htmlentities($department);
        $gender = htmlentities($VoteCount);
        $telephone = htmlentities($telephone);
        $password = htmlentities($Content);
        
        $query = "INSERT INTO candidates (FirstName, LastName, Department, Telephone, Content) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($query);
        
        return ($stmt -> execute([$first_name, $last_name, $department, $VoteCount, $telephone]));
    }

}