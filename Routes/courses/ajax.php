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
    <title>Ajax Courses</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container"></div>
    <div id="part-container"></div>
    
    <h1 class="border-bottom pb-3 mb-4" style="padding: 20px;">Ajax Courses</h1>
    <div class="button-container">
      <a class="btn btn-primary" href="/Routes/participants.php?q=ajax_course"> View participants</a>
      <a class="btn btn-primary" href="/Routes/unenroll.php?q=ajax_course"> Unenroll? </a>
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
      <p style="font-size: 150%;">Take your first step towards mastering Ajax!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/82hnvUYY6QA">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/82hnvUYY6QA" target="popup"> AJAX Crash Course (Vanilla JavaScript)</a></h2>
          <p style="word-wrap: inherit;">In this video we will dive into AJAX with Vanilla JS and NO JQUERY. We will examine the XHR object and how it works. This is a beginner friendly tutorial for anyone that  has very basic JavaScript knowledge.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/FJZEVmF3eDg">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/FJZEVmF3eDg" target="popup"> Ajax Tutorial</a></h2>
          <p style="word-wrap: inherit;"> In this javascript ajax tutorial in hindi, you will learn everything you need to know about ajax and asynchronous programming in javascript.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/5MmEUWfuZFk">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/5MmEUWfuZFk" target="popup"> Learn Ajax in 15 mins with examples </a></h2>
          <p style="word-wrap: inherit;"> In this video I will explain you what is Ajax, Types of Ajax, Ajax Disadvantages and Ajax Examples.</p>
        
        </div>
      </div>
    </div>    
    <div class="container filter medium">
      <h1>Medium Courses (5-10 hours)</h1>
      <p style="font-size: 150%;">Transition from beginner to master in a day!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/ACNGhBfNftA">
          </iframe>
          <h2><a href="https://www.youtube.com/playlist?list=PLgp11Hu-N4DT59rXjR57hhy6pMH3I2yHU" target="popup"> AJAX Tutorial for Beginners and Professionals</a></h2>
          <p style="word-wrap: inherit;">This UI Development video contains full of UI Related Projects and RealTime Approach. You can most of the knowledge in UI Technologies with Hands on experience.</p>
        </div>

        <div class="box boxx">
          <img src="https://img-c.udemycdn.com/course/480x270/2473452_8f86.jpg" style="width: 100%; padding: 10px;">
          <h2><a href="https://www.udemy.com/course/ajax-for-beginners-with-jquery-php-mysql-tutorial/" target="popup"> AJAX : Let's build a COOL project</a></h2>
          <p style="word-wrap: inherit;">This AJAX for beginner's tutorial course will teach you what AJAX is and how to start using it with PHP to create excellent web applications. </p>
        </div>

        <div class="box boxx">
          <img src="https://img-c.udemycdn.com/course/480x270/2262568_e492.jpg" style="width: 100%; padding: 10px;">
          <h2><a href="https://www.udemy.com/course/php-mysql-development-with-ajax-modern-javascript-es6/" target="popup"> Php mysql Development with Ajax</a></h2>
          <p style="word-wrap: inherit;">This course is dedicated to teach students how to build applications using php, mysql ajax & modern JavaScript Es6 fetch api methods, without using any JavaScript library like jquery etc.</p>
        </div>
      </div>
    </div>    
    <div class="container filter long">
      <h1>Long Courses (>10 hours)</h1>
      <p style="font-size: 150%;">Become a Professional!</p>
      <div class="box-container">
        <div class="box boxx">
          <img src="https://img-c.udemycdn.com/course/480x270/1587422_b7a4_6.jpg" style="width: 100%; padding: 10px;">
          <h2><a href="https://www.udemy.com/course/complete-json-ajax-course/" target="popup"> Complete JSON AJAX API Code Course</a></h2>
          <p style="word-wrap: inherit;">Prefect course for beginners to learn AJAX and JSON!!! Step by step learning with all steps included.</p>
        </div>

        <div class="box boxx">
          <img src="https://img-c.udemycdn.com/course/480x270/2438550_af56_3.jpg" style="width: 100%; padding: 10px;">
          <h2><a href="https://www.udemy.com/course/php-ajax-bootcamp/" target="popup"> Object Oriented PHP & Ajax</a></h2>
          <p style="word-wrap: inherit;">in this course, we will learn everything about AJAX and Object-Oriented Programming, once we learn the basics of AJAX and Object-Oriented Programing afterward we will create a project using AJAX and Object-Oriented Programming. </p>
        </div>

        <div class="box boxx">
          <img src="https://img-c.udemycdn.com/course/480x270/662764_3b79_5.jpg" style="width: 100%; padding: 10px;">
          <h2><a href="https://www.udemy.com/course/ajax-signup-login-form-with-cool-validations/" target="popup">Advanced PHP Ajax Registration & Login Form</a></h2>
          <p style="word-wrap: inherit;">In this course you will learn how to submit the signup && login form using ajax technique with cool jQuery validations.</p>
        </div>
      </div>
    </div>    

    <div class="ref">
      <h1>Useful Resources</h1>
  
      <ul>
        <li><a href="https://www.w3schools.com/xml/ajax_intro.asp">w3schools AJAX Introduction</a></li>
        <li><a href="https://www.freecodecamp.org/news/ajax-tutorial/">What AJAX Is and How to Use it</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX">Mozilla Developer Network(MDN) Web Docs</a></li>
        <li><a href="https://thesharad.files.wordpress.com/2010/10/ajax-a-beginners-guide.pdf">AJAX: A Beginner's Guide</a></li>
      </ul>
    </div>

    <div class="footer-filler"></div>
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