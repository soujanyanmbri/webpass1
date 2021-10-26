<?php
    require_once "../config.php";
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false)
            header("location: login.php");
    
    $username = $_SESSION["username"];
    $id = $_SESSION['id'];
    $q=$_GET["q"];
    $sql = "UPDATE `user_courses` SET $q=0 WHERE `username`='$username'";       
    $result = mysqli_query($link, $sql);
    echo"$sql";
    header("Location:coursespage.php")
?>