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
    $query = "SELECT * FROM `user_courses` WHERE `username`='$username'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $sum = $row['ajax_course'] + $row['java_course'] + $row['html_course'] + $row['javascript_course'] + $row['python_course'] + $row['css_course'] ;
    if($sum == 0)
    {
        $sql = "DELETE FROM `user_courses` WHERE `username`='$username'";
        $result = mysqli_query($link, $sql);
        $sql = "DELETE FROM `users` WHERE `username`='$username'";
        $result = mysqli_query($link, $sql);
        $_SESSION["errorMessage"] = true ;
        unset($_SESSION["loggedin"]);
        $_SESSION["loggedin"] = false;
        unset($_SESSION["id"]);
        unset($_SESSION["username"]);
        header("location: login.php");
    }
    else {
    header("Location:coursespage.php");
    }
?>