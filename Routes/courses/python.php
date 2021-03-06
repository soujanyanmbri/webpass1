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
    <title>Python Courses</title>
  </head>
  <body style="background-color: pink;">
    <div id="nav-container"></div>
    <h1 class="border-bottom pb-3 mb-4" style="padding: 20px;">Python Courses</h1>
    
    <div class="button-container">
      <a class="btn btn-primary" href="/Routes/participants.php?q=python_course"> View participants</a>
      <a class="btn btn-primary" href="/Routes/unenroll.php?q=python_course"> Unenroll? </a>
      
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
      <p style="font-size: 150%;">Take your first step towards mastering Python!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/rfscVS0vtbw">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/rfscVS0vtbw" target="popup"> Learn Python - Full Course for Beginners</a></h2>
          <p style="word-wrap: inherit;">This course will give you a full introduction into all of the core concepts in python. Follow along with the videos and you'll be a python programmer in no time!</p>
        </div>
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/hl-Y3tLMkbY">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/hl-Y3tLMkbY" target="popup"> Python Programming - Full Course for Beginners to Experts</a></h2>
          <p style="word-wrap: inherit;"> This Python Programming course covers everything you need to about Python programming. You will Learn about python programming from the very basics to the advanced level.</p>
        </div>
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/t8pPdKYpowI">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/t8pPdKYpowI" target="popup"> Python Tutorial for Beginners
          </a></h2>
          <p style="word-wrap: inherit;"> In this complete Python course you will learn everything you need to get started with Python. By the end of this course, you will have a good understanding of the concepts and hands-on experience with several demo projects you can follow along.</p>
        </div>
      </div>
    </div>    
    <div class="container filter medium">
      <h1>Medium Courses (5-10 hours)</h1>
      <p style="font-size: 150%;">Transition from beginner to master in a day!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/_uQrJ0TkZlc">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/_uQrJ0TkZlc" target="popup"> Python for Beginners [Full Course]</a></h2>
          <p style="word-wrap: inherit;">Python tutorial - Python for beginners - Go from Zero to Hero with Python (includes machine learning & web development project).</p>
        </div>
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/HGOBQPFzWKo">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/HGOBQPFzWKo" target="popup"> Intermediate Python Programming Course</a></h2>
          <p style="word-wrap: inherit;">Take your Python skills to the next level with this intermediate Python course. </p>
        </div>
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/PJlAnR3asGQ">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/PJlAnR3asGQ" target="popup"> Complete Python Course - Beginner to Advanced</a></h2>
          <p style="word-wrap: inherit;">This complete Python programming course will give you clear explanation of each Python programming. </p>
        </div>
      </div>
    </div>    
    <div class="container filter long">
      <h1>Long Courses (>10 hours)</h1>
      <p style="font-size: 150%;">Become a Professional!</p>
      <div class="box-container">
        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/WGJJIrtnfpk">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/WGJJIrtnfpk" target="popup"> Python Tutorial For Beginners | Edureka</a></h2>
          <p style="word-wrap: inherit;">This Edureka video on Python Full Course will help you learn the Python programming language and its core concepts with examples from scratch.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/8DvywoWv6fI">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/8DvywoWv6fI" target="popup"> Python for Everybody - Full University Python Course</a></h2>
          <p style="word-wrap: inherit;">This Python 3 tutorial course aims to teach everyone the basics of programming computers using Python.</p>
        </div>

        <div class="box boxx">
          <iframe class="video-frame" src="https://www.youtube.com/embed/XKHEtdqhLK8">
          </iframe>
          <h2><a href="https://www.youtube.com/embed/XKHEtdqhLK8" target="popup">Python Full Course </a></h2>
          <p style="word-wrap: inherit;">This Python Programming course covers everything you need to about Python programming. You will Learn about python programming from the very basics to the advanced level.</p>
        </div>
      </div>
    </div> 
  
    <div class="ref">
      <h1>Useful Resources</h1>
  
      <ul>
        <li><a href="https://docs.python.org/3/tutorial/">Python Documentation</a></li>
        <li><a href="https://static.realpython.com/python-basics-sample-chapters.pdf">Python Basics: A Practical Introduction to Python 3</a></li>
        <li><a href="http://do1.dr-chuck.com/pythonlearn/EN_us/pythonlearn.pdf">Python for Everybody</a></li>
        <li><a href="https://ncert.nic.in/textbook/pdf/kecs105.pdf">Getting Started with
          Python</a></li>
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