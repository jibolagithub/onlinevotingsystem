<?php

session_start();

if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["department"]) && isset($_POST["matric_number"]) && isset($_POST["telephone"]) && isset($_POST["content"])){

    $first_name = $_POST['first_name'];
    $telephone = $_POST["telephone"];
    $password = $_POST["content"];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $matric_num = $_POST['matric_number'];

    if(isset($_POST['submit'])){
            $classes_redirect = "../classes/";
            include $classes_redirect."CandidateController.php";

            $CandidateControllerInstance = new CandidateController;

            if($CandidateControllerInstance -> ($first_name, $last_name, $department, $VoteCount, $telephone, $Content)){

                echo "inserted";
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