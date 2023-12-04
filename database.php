<?php
$mysqli = new mysqli("localhost","husseiny","12345","crud");

    if(!$mysqli){
        die(mysqli_error($mysqli)) ;
    }
?>  