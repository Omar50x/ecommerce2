<?php
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce2');
    if (!$con) {
        die(mysqli_error($con));
    }
?>