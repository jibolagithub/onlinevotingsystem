<?php
include_once $classes_redirect."Users.php";

class UsersView extends Users {

    public function login_exists($telephone, $password){

        return $this -> login_exists_db( $telephone, $password);

    }


}