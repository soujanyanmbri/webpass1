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
    <title>JavaScript Courses</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container"></div>
    <div class="button-container">
      <a class="btn btn-primary" href="/Routes/participants.php?q=javascript_course"> View participants</a>
      <a class="btn btn-primary" href="/Routes/unenroll.php?q=javascript_course"> Unenroll? </a>
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
      <p style="font-size: 150%;">Take your first step towards mastering JavaScript!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/PkZNo7MFNFg">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/PkZNo7MFNFg" target="popup"> Learn JavaScript</a></h2>
          <p style="word-wrap: inherit;">This complete 134-part JavaScript tutorial for beginners will teach you
            everything you need to know to get started with the JavaScript programming language.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/dOnAC2Rr-6A">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/dOnAC2Rr-6A" target="popup"> Javascript Full Course for Beginners
              to
              Advanced</a></h2>
          <p style="word-wrap: inherit;"> Upon completion of this course you will a solid foundation enabling to start
            to
            building backend applications using NodeJS and frontend applications using React of Vue. </p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/o1IaduQICO0">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/o1IaduQICO0" target="popup"> JavaScript Training | Edureka
            </a></h2>
          <p style="word-wrap: inherit;"> This Edureka video on "JavaScript full course" is a complete guide to
            JavaScript
            which covers in-depth knowledge about data types, variables, functions, event handling, form validation, etc
            using JavaScript.</p>

        </div>
      </div>
    </div>
    <div class="container filter medium">
      <h1>Medium Courses (5-10 hours)</h1>
      <p style="font-size: 150%;">Transition from beginner to master in a day!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/Qqx_wzMmFeA">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/Qqx_wzMmFeA" target="popup"> JavaScript Tutorial for Beginners</a>
          </h2>
          <p style="word-wrap: inherit;">Take your web development skills to the next level with this Clever Programmer
            Learn Javascript course for beginners.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/jS4aFq5-91M">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/jS4aFq5-91M" target="popup"> JavaScript Programming - Full
              Course</a>
          </h2>
          <p style="word-wrap: inherit;">Learn JavaScript from scratch by solving over a hundred different coding
            challenges. </p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/3PHXvlpOkf4">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/3PHXvlpOkf4" target="popup"> Build 15 JavaScript Projects</a></h2>
          <p style="word-wrap: inherit;">Sharpen your JavaScript skills by building 15 projects using plain JavaScript
            without frameworks. </p>
        </div>
      </div>
    </div>
    <div class="container filter long">
      <h1>Long Courses (>10 hours)</h1>
      <p style="font-size: 150%;">Become a Professional!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/g1X6b5tRvrw">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/g1X6b5tRvrw" target="popup"> Learn JavaScript | Great Learning</a>
          </h2>
          <p style="word-wrap: inherit;">In this tutorial, we have covered all the topics that will give you a headstart
            to work in this field, such as, What is JavaScript, Where to write, Loops in JavaScript, and much more.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/U-JhRjRaD4A">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/U-JhRjRaD4A" target="popup">Complete Web Development Course</a>
          </h2>
          <p style="word-wrap: inherit;">Everything you need to become a professional web developer is included in this
            free screen capture HD video tutorial course! Begin with the basics and Learn some of or more Advanced
            Projects Right away! </p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/KGkiIBTq0y0">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/KGkiIBTq0y0" target="popup">Complete JavaScript Tutorial</a></h2>
          <p style="word-wrap: inherit;">We will cover Basic to Advanced Javascript, Modern JavaScript, OOPS in
            JavaScript.</p>
        </div>
      </div>
    </div>

    <div class="ref">
      <h1>Useful Resources</h1>

      <ul>
        <li><a href="https://www.w3schools.com/js/">w3schools JavaScript Tutorial</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">Mozilla Developer Network(MDN) Web
            Docs</a></li>
        <li><a href="https://javascript.info/">The Modern JavaScript Tutorial</a></li>
        <li><a href="https://eloquentjavascript.net/Eloquent_JavaScript.pdf">Eloquent JavaScript</a></li>
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