<?php
// connect to database
$conn = mysqli_connect('localhost', 'shaun', 'test123', 'ninja_pizza') or die(mysqli_error());

// check connection
if(!$conn){
    echo 'Connection erro: ' . mysqli_connect_error();
}

?>
