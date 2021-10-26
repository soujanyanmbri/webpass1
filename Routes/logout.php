<?php
    session_start();
    unset($_SESSION["loggedin"]);
    $_SESSION["loggedin"] = false;
    unset($_SESSION["id"]);
    unset($_SESSION["username"]);
    header("Location:login.php");
?>