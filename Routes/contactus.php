<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/common.css">

    <title>Contact Us</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container">
    </div>
    <div id="main-holder">
      <h1 id="login-header" style="color:black">Contact Us</h1>
      <form id="login-form" method="post">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Full Name">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Your email">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Phone Number">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Query">
        <input type="submit" value="Send" id="login-form-submit" >
      </form>
    </div>


    <div class="footer-filler"></div>
    <div id="footer-container">

    </div>
    </body>
</html>

<script>
  $(document).ready(function(){
    $("#nav-container").load("/Components/nav.php");
    $("#footer-container").load("/Components/footer.html");
  });
</script>