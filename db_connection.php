<?php
    $con=mysqli_connect("localhost","root","","uzenet");
    
    if($con === false){
        die("HIBA: Sikertelen kapcsolódás. " . mysqli_connect_error());
    }
?>