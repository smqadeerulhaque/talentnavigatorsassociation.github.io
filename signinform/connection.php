<?php

    $con=mysqli_connect('localhost','root','','portfolio');

    if(!$con)
    {
        die('Please Check Your Connection'.mysqli_error($con));
    }
?>