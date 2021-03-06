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
    <link rel="stylesheet" href="/CSS/common.css">
    <script src="../../JS/course.js"> </script>
    <title>CSS Courses</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container"></div>
    <h1 class="border-bottom pb-3 mb-4" style="padding: 20px;">CSS Courses</h1>

    <div class="button-container">
      <a class="btn btn-primary" href="/Routes/participants.php?q=css_course"> View participants</a>
      <a class="btn btn-primary" href="/Routes/unenroll.php?q=css_course"> Unenroll? </a>
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
      <p style="font-size: 150%;">Take your first step towards mastering CSS!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/ieTHC78giGQ">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/ieTHC78giGQ" target="popup"> CSS Full Course</a></h2>
          <p style="word-wrap: inherit;">Learn CSS in this complete tutorial course. This course will teach you everything you need to know to get started with CSS3, including flexbox and CSS grid.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/yfoY53QXEnI">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/yfoY53QXEnI" target="popup"> CSS Crash Course For Absolute Beginners</a></h2>
          <p style="word-wrap: inherit;"> In this video we will be looking at styles, selectors, declarations, etc. We will build a CSS cheat sheet that you can keep as a resource and we will also create a basic website layout.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/KN6oBEOz2ZI">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/KN6oBEOz2ZI" target="popup"> CSS Crash Course </a></h2>
          <p style="word-wrap: inherit;"> Join the 3-part epic masterclass that shows you how to become a 6-figure developer.</p>
        
        </div>
      </div>
    </div>    
    <div class="container filter medium">
      <h1>Medium Courses (5-10 hours)</h1>
      <p style="font-size: 150%;">Transition from beginner to master in a day!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/1Rs2ND1ryYc">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/1Rs2ND1ryYc" target="popup"> CSS Tutorial - Zero to Hero</a></h2>
          <p style="word-wrap: inherit;">In this course, we cover CSS from the ground up. You will learn everything from basic skills, such as coloring and text, to highly advanced skills, like custom animations.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/WyxzAU3p8CE">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/WyxzAU3p8CE" target="popup"> Complete CSS Course For Beginners to Advanced</a></h2>
          <p style="word-wrap: inherit;">In this tutorial, you will learn what is CSS and application of CSS. </p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/Edsxf_NBFrw">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/Edsxf_NBFrw" target="popup"> CSS Tutorial In Hindi</a></h2>
          <p style="word-wrap: inherit;">In this CSS3 tutorial in Hindi we will learn everything you need to learn about CSS from scratch.</p>
        </div>
      </div>
    </div>    
    <div class="container filter long">
      <h1>Long Courses (>10 hours)</h1>
      <p style="font-size: 150%;">Become a Professional!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/mU6anWqZJcc">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/mU6anWqZJcc" target="popup"> Learn HTML5 and CSS3 From Scratch</a></h2>
          <p style="word-wrap: inherit;">In this course we will cover both languages from the scratch and by the end of the course you will be creating your own projects.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/yTHTo28hwTQ">
          </iframe>
          <h2><a href="https://www.youtube.com/playlist?list=PLgGbWId6zgaWZkPFI4Sc9QXDmmOWa1v5F" target="popup"> 30 Days to learn HTML & CSS</a></h2>
          <p style="word-wrap: inherit;">Even if your goal is not to become a web designer, learning HTML and CSS can be an amazing tool to have in your skill-set -- both in the workplace, and at home. If this has been on your to-do list for some time, why don't you take thirty days and join me?</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/U-JhRjRaD4A">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/U-JhRjRaD4A" target="popup">Complete Web Development Course</a></h2>
          <p style="word-wrap: inherit;">Everything you need to become a professional web developer is included in this free screen capture HD video tutorial course! Begin with the basics and Learn some of or more Advanced Projects Right away! </p>
        </div>
      </div>
    </div>    

    <div class="ref">
      <h1>Useful Resources</h1>
  
      <ul>
        <li><a href="https://www.w3schools.com/css/">w3schools CSS Tutorial</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps">Mozilla Developer Network(MDN) Web
            Docs</a></li>
        <li><a href="https://www.tutorialspoint.com/css/index.htm">CSS Tutorial</a></li>
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