<?php
  session_start();
  require_once "../config.php";
  include_once('../Components/nav.html');

  $user = $_SESSION['username'];

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  {
    header("location: login.php");
  }
}

  function get_participant_count($course) {
    $link = $GLOBALS['link'];
    $sql = "SELECT COUNT(*) FROM user_courses WHERE $course = 1";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    return $row[0];
  }

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
  <body style="background-colour: black">

    <div class="card-container">
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="http://www.ophtek.com/wp-content/uploads/2014/08/java_tech.jpg" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">JAVA - <?php echo get_participant_count('java_course');?> Registered</h4>
          </h4>
          <p class="card-text"> Programming Language</p>
          <div class="button-container">
          <?php
          $sql = "SELECT `java_course` FROM `user_courses` WHERE `username`='$user'";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          if($row[0] == 1) {
            echo '<a href="courses/java.html" class="btn btn-primary t-btn">Go to course</a>';
          }
          else {
            echo '<form method="POST">';
            echo '<input type="submit" name="java_course" value="Register now" class="btn btn-primary t-btn"></input>';
            echo '</form>';

            if(isset($_POST['java_course'])) {
              $sql = "UPDATE `user_courses` SET `java_course`=1 WHERE `username`='$user'";       
              $result = mysqli_query($link, $sql);
              if(mysqli_affected_rows($link) > 0) {
                echo '<a href="courses/ajax.html" class="btn btn-primary t-btn">Go to course</a>';
              }            
            }
          }
          ?>
          </div>
        </div>
      </div>
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="https://www.clipartkey.com/mpngs/m/309-3091112_clipart-of-python-and-binatang-transparent-cartoons-python.png" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">PYTHON - <?php echo get_participant_count('python_course');?> Registered</h4>
          <p class="card-text">Programming Language.</p>
          <div class="button-container">
          <?php
          $sql = "SELECT `python_course` FROM `user_courses` WHERE `username`='$user'";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          if($row[0] == 1) {
            echo '<a href="courses/python.html" class="btn btn-primary t-btn">Go to course</a>';
          }
          else {
            echo '<form method="POST">';
            echo '<input type="submit" name="python_course" value="Register now" class="btn btn-primary t-btn"></input>';
            echo '</form>';

            if(isset($_POST['python_course'])) {
              $sql = "UPDATE `user_courses` SET `python_course`=1 WHERE `username`='$user'";       
              $result = mysqli_query($link, $sql);
              if(mysqli_affected_rows($link) > 0) {
                echo '<a href="courses/python.html" class="btn btn-primary t-btn">Go to course</a>';
              }            
            }
          }
          ?>
          </div>
        </div>
      </div>
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="https://miro.medium.com/max/2560/0*ljnWAuUhEYej-FQ2.jpeg" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">JAVASCRIPT - <?php echo get_participant_count('javascript_course');?> Registered</h4>
          <p class="card-text">Scripting Language.</p>
          <div class="button-container">
          <?php
          $sql = "SELECT `javascript_course` FROM `user_courses` WHERE `username`='$user'";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          if($row[0] == 1) {
            echo '<a href="courses/javascript.html" class="btn btn-primary t-btn">Go to course</a>';
          }
          else {
            echo '<form method="POST">';
            echo '<input type="submit" name="javascript_course" value="Register now" class="btn btn-primary t-btn"></input>';
            echo '</form>';

            if(isset($_POST['javascript_course'])) {
              $sql = "UPDATE `user_courses` SET `javascript_course`=1 WHERE `username`='$user'";       
              $result = mysqli_query($link, $sql);
              if(mysqli_affected_rows($link) > 0) {
                echo '<a href="courses/javascript.html" class="btn btn-primary t-btn">Go to course</a>';
              }            
            }
          }
          ?>
          </div>
        </div>
      </div>
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="data:image/png;base64,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" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">AJAX - <?php echo get_participant_count("ajax_course")?> Registered </h4>
          <p class="card-text">Set of web development techniques.</p>
          <div class="button-container">
            <?php

            $sql = "SELECT `ajax_course` FROM `user_courses` WHERE `username`='$user'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result);
            if($row[0] == 1) {
              echo '<a href="courses/ajax.html" class="btn btn-primary t-btn">Go to course</a>';
            }
            else {
              echo '<form method="POST">';
              echo '<input type="submit" name="ajax_course" value="Register now" class="btn btn-primary t-btn"></input>';
              echo '</form>';

              if(isset($_POST['ajax_course'])) {
                $sql = "UPDATE `user_courses` SET `ajax_course`=1 WHERE `username`='$user'";       
                $result = mysqli_query($link, $sql);
                if(mysqli_affected_rows($link) > 0) {
                  echo '<a href="courses/ajax.html" class="btn btn-primary t-btn">Go to course</a>';
                }            
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="https://ih1.redbubble.net/image.361593789.5453/ap,550x550,12x12,1,transparent,t.png" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">HTML - <?php echo get_participant_count("html_course")?> Registered </h4>
          <p class="card-text">Hypertext Markup Language.</p>
          <div class="button-container">
          <?php
          $sql = "SELECT `html_course` FROM `user_courses` WHERE `username`='$user'";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          if($row[0] == 1) {
            echo '<a href="courses/html_course.html" class="btn btn-primary t-btn">Go to course</a>';
          }
          else {
            echo '<form method="POST">';
            echo '<input type="submit" name="html_course" value="Register now" class="btn btn-primary t-btn"></input>';
            echo '</form>';

            if(isset($_POST['html_course'])) {
              $sql = "UPDATE `user_courses` SET `html_course`=1 WHERE `username`='$user'";       
              $result = mysqli_query($link, $sql);
              if(mysqli_affected_rows($link) > 0) {
                echo '<a href="courses/html_course.html" class="btn btn-primary t-btn">Go to course</a>';
              }            
            }
          }
          ?>
          </div>
        </div>
      </div>
      <div class="card border border-dark rounded">
        <img class="card-img-top" src="https://www.logolynx.com/images/logolynx/8c/8cdf4c047e99f7389e76aa4e2e7e2803.png" alt="Card image" style="height: 70%;">
        <div class="card-body">
          <h4 class="card-title">CSS - <?php echo get_participant_count("css_course")?> Registered </h4>
          <p class="card-text">Cascading Style Sheets </p>
          <div class="button-container">
          <?php
          $sql = "SELECT `css_course` FROM `user_courses` WHERE `username`='$user'";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_array($result);
          if($row[0] == 1) {
            echo '<a href="courses/css.html" class="btn btn-primary t-btn">Go to course</a>';
          }
          else {
            echo '<form method="POST">';
            echo '<input type="submit" name="css_course" value="Register now" class="btn btn-primary t-btn"></input>';
            echo '</form>';

            if(isset($_POST['css_course'])) {
              $sql = "UPDATE `user_courses` SET `css_course`=1 WHERE `username`='$user'";       
              $result = mysqli_query($link, $sql);
              if(mysqli_affected_rows($link) > 0) {
                echo '<a href="courses/css.html" class="btn btn-primary t-btn">Go to course</a>';
              }            
            }
          }
          ?>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-filler"></div>
    <div id="footer-container">
    </div>
    </body>
</html>

<style>
  .button-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 10px;
  }
  .button-container button {
    margin: 10px;
  }
  .button a {
    margin: 10px;
  }
  
  .t-btn  {
    height: calc(min(5vw, 5vh));
    width: calc(min(17.5vw, 17.5vh));
    font-size: calc(min(2vw, 2vh));
  }

  @media screen and (max-width: 600px) {
    .t-btn  {
      font-size: calc(min(1.5vw, 1.5vh));
    }
  }
    
</style>

<script>
  $(document).ready(function(){
    $("#nav-container").load("/Components/nav.html");
    $("#footer-container").load("/Components/footer.html");
  });
</script>
