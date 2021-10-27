<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../CSS/contact.css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="../../CSS/common.css">

  <title>About Us</title>
</head>

<body>
  <div class="background"></div>
  <div id="nav-container">

  </div>

  <div class="about">
    <div class="image">
      <img src="../images/about.png"
        alt="">
    </div>

    <div class="content" style="color: white; ">
      <div class="inner-content">
        <h3 >Why choose <span style="color:red" >us? </span></h3>
        <p>We are committed to make web development accessible to everyone by providing a wide range of courses for free. We have courses suitable for people of all competencies and expertise. 
        </p>
        <p>Check out the <a href="coursespage.php">courses we offer</a> and start learning today!
        </p>
      </div>
    </div>
  </div>

  <div id="footer-container">

  </div>

</body>

</html>

<style>
  .content{
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 0 40px 0 40px;
    margin-right: 10px;
  }

  .inner-content{
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 50px 0 50px 0;
    padding: 10px;
  }
</style>
<script>
  $(document).ready(function(){
    $("#nav-container").load("/Components/nav.php");
    $("#footer-container").load("/Components/footer.html");
  });
</script>