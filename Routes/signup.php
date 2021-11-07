<?php
require_once "../config.php";
include_once('../Components/nav.php');
$username = $password = $cpassword = "";
$username_err = $password_err = $cpassword_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $mail = $_POST["mail"];
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
       
        $sql = "SELECT id FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                    $username_err = "This username is already taken.";
                else
                    $username = trim($_POST["username"]);
              } else
              echo '<script>alert("Something is wrong")</script>';
            mysqli_stmt_close($stmt);
        }
    }
    if(empty(trim($_POST["password"])))
        $password_err = "Please enter a password.";     
    elseif(strlen(trim($_POST["password"])) < 6)
        alert("Passwords should be atleast 6 characters long");   
    else
        $password = trim($_POST["password"]);
    if(empty(trim($_POST["cpassword"])))
    {
        header("location: signup.php");
        echo '<script>alert("Please confirm password.")</script>';   
    }
        
    else{
        $cpassword = trim($_POST["cpassword"]);
        if(empty($password_err) && ($password != $cpassword))
        {
            header("location: signup.php");
            echo '<script>alert("Passwords did not match.")</script>';   
        }
    }
    if(empty($username_err) && empty($password_err) && empty($cpassword_err)){
        $sql = "INSERT INTO users (username, password, phone_number, address, mail) VALUES (?, ?,?,?,?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password,$phone_number, $address, $mail);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            if(mysqli_stmt_execute($stmt))
            {
              $query = "INSERT INTO user_courses (username, ajax_course, css_course, html_course, java_course, javascript_course, python_course) VALUES ('$param_username',0,0,0,0,0,0)";
              if(mysqli_query($link,$query))
                header("location: login.php");
              else 
                echo mysqli_error($link);
            }
            else
                echo "Insert error";
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../CSS/reg.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/common.css">
    <style>
      .bs-example{
          margin: 20px;        
      }
  </style>
  <script>
  // Self-executing function
  (function() {
      'use strict';
      window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                  }
                  form.classList.add('was-validated');
              }, false);
          });
      }, false);
  })();
  var check = function() {
    if (document.getElementById('password-field').value ==
        document.getElementById('cpassword-field').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
    }
    }
  </script>
    <title>Register</title>
  </head>
  <body>
    <div id="nav-container">   </div>

    <div id="main-holder" class="mod-holder">
      <h1 id="login-header" style="color:black;">Sign Up!</h1>
      <form id="login-form" class="mod-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <!---<form id="login-form" onsubmit="checkLogin()"> -->
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" required>
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
        <input type="text" name="phone_number" id="number-field" class="login-form-field" placeholder="Phone" required>
        <input type="tel" name="address" id="address-field" class="login-form-field" placeholder="Address" required>
        <input type="email" name="mail" id="email-field" class="login-form-field" placeholder="Mail ID" required>
        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password-field" class="login-form-field" placeholder="Password" required onkeyup='check();'> 
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
        <input type="password" name="cpassword" id="cpassword-field" class="login-form-field" onkeyup='check();' placeholder="Confirm Password" required> 
        <span id='message'></span>
        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        <input type="submit" value="Sign Up" id="login-form-submit" >
        <br>
        <a href = "login.php"> Already have an account? </a>
       <a href = "signup.php"> Forgot Password? </a>
      </form>
       
    </div>
    <?php include_once('../Components/footer.html');?>
    </body>
</html>

<style>
    .mod-form {

    }

    .mod-holder {
        min-height: 55vh;
    }
</style>