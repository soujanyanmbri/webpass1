<?php
    // session_start();
    // $_SESSION["loggedin"] = true;
    // $_SESSION["username"] = 'kay';
    require_once "../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../CSS/coursepage.css">
    
    <title>Courses</title>
  </head>
  <body style="background-color: pink;">
  <?php include_once('../Components/nav.html'); ?>
  <div class="container">
  <?php
  $q=$_GET["q"];
    $ops = array("ajax_course","css_course","html_course","java_course","javascript_course","python_course");

    if(in_array($q,$ops)){
        $sql = "SELECT username FROM user_courses WHERE $q=1";
        $result = $link->query($sql);
        if($result){
            if($result->num_rows>0){
                $course_name = explode("_",$q)[0];
                $course_name = ucfirst($course_name);
                echo "<p>Course : $course_name</p>" ;
                echo "<ul class='list-group'>";
                while($row = $result->fetch_assoc()){
                    echo "<li class='list-group-item'>".$row['username']."</li>";
                }
                echo "</ul>";
            }
            else {
                echo "<p class='p-margin'>No users enrolled in this course : $q.</p>";
            }
        }
    }
    else {
        echo "<p class='p-margin'>Invalid course.</p>";
    }
    ?>
  </div>
  <?php include_once('../Components/footer.html'); ?>
  </body>
</html>

<style>
    body {
        min-height: 100vh; 
    }
    
    p {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
    }

    .p-margin {
        margin-top: 10%;
    }

    .list-group {
        margin-top: 2.5%;
        height : 70vh ;
        overflow-y: auto;
    }
</style>