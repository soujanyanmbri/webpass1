<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../../CSS/courses.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="../../CSS/common.css">
    <script src="../../JS/course.js"> </script>
    <title>Java Courses</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container"></div>
    <h1 class="border-bottom pb-3 mb-4" style="padding: 20px;">Java Courses</h1>

    <div class="button-container">
      <a class="btn btn-primary" href="/Routes/participants.php?q=java_course"> View participants</a>
      <a class="btn btn-primary" href="/Routes/unenroll.php?q=java_course"> Unenroll? </a>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter according to length
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" onclick="filterSelection('all')" href="#" >all</a>
          <a class="dropdown-item" onclick="filterSelection('small')" href="#">Small</a>
          <a class="dropdown-item" onclick="filterSelection('medium')" href="#">Medium</a>
          <a class="dropdown-item" onclick="filterSelection('long')" href="#">Long</a>
      
        </div>
      </div>
    </div>


    <div class="container filter small">
      <h1>Short Courses (1-5 hours)</h1>
      <p style="font-size: 150%;">Take your first step towards mastering Java!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/eIrMbAQSU34">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/eIrMbAQSU34" target="popup"> Java Tutorial for Beginners [2020]</a></h2>
          <p style="word-wrap: inherit;">Learn Java, the language behind millions of apps and websites.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/GoXwIVyNvX0">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/GoXwIVyNvX0" target="popup"> Intro to Java Programming</a></h2>
          <p style="word-wrap: inherit;"> Learn how to program in Java in this full tutorial course. This is a complete Java course meant for absolute beginners. No prior programming experience is required.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/Yv_4RXyLjL8">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/Yv_4RXyLjL8" target="popup"> Java Tutorial - For Beginners
          </a></h2>
          <p style="word-wrap: inherit;"> This java tutorial for beginners will teach you the java programming language. It will start by going over fundamentals java programming concepts and slowly transition into more advanced topics</p>
        
        </div>
      </div>
    </div>    
    <div class="container filter medium">
      <h1>Medium Courses (5-10 hours)</h1>
      <p style="font-size: 150%;">Transition from beginner to master in a day!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/8cm1x4bC6104">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/8cm1x4bC610" target="popup"> Java Tutorial for Beginners | Full Course</a></h2>
          <p style="word-wrap: inherit;">Learn Java, the language behind millions of apps and websites, with tons of hands-on experience!</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/hBh_CC5y8-s">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/hBh_CC5y8-s" target="popup"> Java Online Training | Edureka</a></h2>
          <p style="word-wrap: inherit;">This Edureka Java Full Course will help you in understanding the various fundamentals of Java in detail with examples. </p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/grEKMHGYyns">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/grEKMHGYyns" target="popup"> Learn Java 8 - Full Tutorial for Beginners</a></h2>
          <p style="word-wrap: inherit;">Learn Java 8 and object oriented programming with this complete Java course for beginners.</p>
        </div>
      </div>
    </div>    
    <div class="container filter long">
      <h1>Long Courses (>10 hours)</h1>
      <p style="font-size: 150%;">Become a Java Professional!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/2qr7gHNErIk">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/2qr7gHNErIk" target="popup"> Learn Java Programming | Simplilearn</a></h2>
          <p style="word-wrap: inherit;">Java Programming for Beginners will help you with the complete fundamentals of Java Programming along with real-time practical examples for a better learning experience.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/xk4_1vDrzzo">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/xk4_1vDrzzo" target="popup"> Java Full Course</a></h2>
          <p style="word-wrap: inherit;">Learn the core Java skills needed to apply for Java developer positions in just 12 hours.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/ZFnRvpxpnOc">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/ZFnRvpxpnOc" target="popup">Core Java Tutorial</a></h2>
          <p style="word-wrap: inherit;">Learn Core Java with lots of hands-on practice in 15 hours.</p>
        </div>
      </div>
    </div>    

    <div class="ref">
      <h1>Useful Resources</h1>
  
      <ul>
        <li><a href="https://www.w3schools.com/java/">w3schools Java Tutorial</a></li>
        <li><a href="https://docs.oracle.com/javase/tutorial/">Java Documentation</a></li>
        <li><a href="http://vergil.chemistry.gatech.edu/resources/programming/pdf/TIJ2.pdf">Thinking in Java</a></li>
        <li><a href="https://gfgc.kar.nic.in/sirmv-science/GenericDocHandler/138-a2973dc6-c024-4d81-be6d-5c3344f232ce.pdf">The Complete Reference: Java</a></li>
      </ul>
    </div>

    <div class="footer-filler"></div>
    <div id="footer-container"></div>
    </body>
</html>

<script>
  $(document).ready(function(){
    $("#nav-container").load("/Components/nav.php");
    $("#footer-container").load("/Components/footer.html");
  });
</script>