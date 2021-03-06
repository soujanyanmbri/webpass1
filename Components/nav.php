<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <img src="/images/book.jpg" style="width: 40px; height:40px" class="n-logo logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
        <li class="nav-item active" >
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/Routes/about.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Routes/contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Routes/coursespage.php">Courses offered</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Routes/mentors.php"> Mentors</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <?php 
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
        {
            echo'<li class="nav-item">
            <img src="/images/logout.png" style="width: 40px; height:40px" class="logo">
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/Routes/logout.php">Logout &ensp; </a>
        </li>';
        }
        else
        {
            echo '<li class="nav-item">
            <img src="/images/login.png" style="width: 40px; height:40px" class="logo">
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/Routes/login.php"> Login</a>
        </li>
        <li class="nav-item">
            <img src="/images/sign-up.png" style="width: 40px; height:40px" class="logo">
        </li>
        <li class="nav-item" style="margin-right:2em;">
            <a class="nav-link" href="/Routes/signup.php">Sign Up!</a>
        </li>
        ';
        }

        ?>
        
        
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" onkeyup="showResult(this.value)">
            <!--button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button-->
        </form>
    </div>
</nav>
<div class="bg-dark" id="livesearch"></div>

<style>
    .n-logo{
        border-radius: 10px 0 10px 0;
    }
</style>

<script>
    // console._log("navbar loaded");
    function showResult(str) {
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        // console.log(str);
        xmlhttp.open("GET","/livesearch.php?q="+str,true);
        xmlhttp.send();
        // console.log("done");
    }
</script>