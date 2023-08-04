<?php

session_start();

if(isset($_POST["telephone"]) && isset($_POST["password"])){

    $telephone = $_POST["telephone"];
    $password = $_POST["password"];

    if(!empty($telephone) && !empty($password)){
            $classes_redirect = "../classes/";
            include $classes_redirect."UsersView.php";

            $UsersViewInstance = new UsersView();

            if($UsersViewInstance -> login_exists($telephone, $password)){

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