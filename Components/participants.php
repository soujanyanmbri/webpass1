<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'db_user' with 123 password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'db_user');
    define('DB_PASSWORD', '123');
    define('DB_NAME', 'webp');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    function Fun() {
        echo "Function Called <br>" ;
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
    }

    if(array_key_exists("show",$_POST)) {
        Fun() ;
    }

    // Check connection
    if($link === false)
        echo("ERROR: Could not connect. " . mysqli_connect_error()) ;
    else
        echo "Connected successfully";
    $uri = $_SERVER['REQUEST_URI'];
    echo $uri;
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<button onclick="clickMe()" name="show" value="show" class="btn btn-primary">
    Load Participants
</button>
<div id="participants"></div>

<script>
    function clickMe(){
        console.log("JS Function")
        var result ="<?php Fun(); ?>"
        document.getElementById("participants").innerHTML = result;
    }
</script>