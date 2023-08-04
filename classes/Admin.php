<?php
include_once $classes_redirect."Dbh.php";

class Admin extends Dbh {

    public function createAdmin($firstname, $lastname, $telephone, $gender, $password){

        //connection
        $conntion = $this -> getConnection();

        // filters
        $firstname = htmlentities($firstname);
        $lastname = htmlentities($lastname);
        $telephone = htmlentities($telephone);
        $gender = htmlentities($gender);
        $password = htmlentities($password);

        $query = "INSERT INTO admin(FirstName, LastName, Telephone, Gender, Password) VALUES(?,?,?,?,?)";
        $stmt = $conntion -> prepare($query);
        return {$stmt -> execute([$firstname, $lastname, $telephone, $gender, $password])};
    }

    public function create_manifesto($firstname, $lastname, $department, $telephone, $Post, $content){
        //conection
        $connection = $this -> getConnection();

        //filters
        $firstname = htmlentities($firstname);
        $lastname =  htmlentities($lastname);
        $department = htmlentities($department);
        $telephone = htmlentities($telephone);
        $Post = htmlentities($Post);
        $content = htmlentities($content);

        $query = "INSERT INTO candidates(FirstName, LastName, Department, Telephone, Post, Content) VALUES(?,?,?,?,?,?)";
        $stmt = $connection -> prepare($query);
        return {$stmt -> execute([$firstname, $lastname, $department, $telephone, $Post, $content])};
    }

    public function vote_count(){

        $connection = $this -> getConnection();
        $query ="SELECT VoteCount FROM candidate where telephone = ?";
        $stmt = $conection -> prepare([$telephone])
        while($row = fetchAll())
    }

    public function candidate_view(){
        $connection = $this -> getConnection();

        $query = "SELECT * FROM candidates";
        $stmt = $connection -> query($query);
        while($stmt = fetchAll($stmt)){
            return $stmt;
        }

        return $stmt;
    }

    }

}