<?php
include_once $classes_redirect."Users.php";

class UsersController extends Users {

    public function add_user($first_name, $last_name, $department, $gender, $telephone, $password){

        return $this->add_user_db($first_name, $last_name, $department, $gender, $telephone, $password);

    }
}