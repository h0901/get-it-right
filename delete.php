<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","","todo");
    $chore=$_GET['chore'];
    $q = "delete from list where Chore='$chore'";
    mysqli_query($conn,$q);
    header('location:display.php');
?>