<?php

session_start();

if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["department"]) && isset($_POST["matric_number"]) && isset($_POST["telephone"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])){

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $department = $_POST["department"];
    $matric_number = $_POST["matric_number"];
    $telephone = $_POST["telephone"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if(!empty($first_name) && !empty($last_name) && !empty($department) && !empty($matric_number) && !empty($telephone) && !empty($gender) && !empty($password) && !empty($confirm_password)){
            $classes_redirect = "../classes/";
            include $classes_redirect."UsersController.php";

            $users_controller_instance = new UsersController();

            if($users_controller_instance -> add_user($first_name, $last_name, $department, $gender, $telephone, $password)){

                header("Location: ../profile/");

            }else{

                $_SESSION["login_err"] = "Invalid usermame or password";

                ?>
                <script type="text/javascript">window.history.back();</script>
                <?php
            }
    }else{

        $_SESSION["login_err"] = "Fill in all fields.";

        ?>
        <script type="text/javascript">window.history.back();</script>
        <?php
    }
}
?>


