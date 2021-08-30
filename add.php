<?php
error_reporting(0);
$insert=false;
$submit=false;
  $conn=mysqli_connect("localhost","root","","todo");
    $name=$_POST['name'];
    $chore=$_POST['chore'];
    $q="INSERT INTO list VALUES ('$name','$chore')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get It Right!</title>
</head>
<body>
    <div class="header">
    <h1 style="text-align: center; font-size:50px">GET IT RIGHT!</h1>
    <h3 style="text-align: center; font: size 20px; margin-top: -25px;">Your daily dose of productivity</h3></div>
    <div class="container">
        <p style="font-size:30px;"> Add a chore </p>
        <?php 
           if($conn->query($q))  { $insert=true; }
            if($insert == true)
              //  echo "<p style='font-size:15px;''> Chore inserted! </p>";
        ?>
    </div>
    <form action="add.php" method="post" style="margin-bottom: 20px;">
        <input type="text" name="name" id="name" placeholder="Enter name" style="width:70%; height: 30px;"><br> <br>
        <input type="text" name="chore" id="chore" placeholder="Enter new chore" style="width:70%; height: 30px;"><br> 
        <button style="margin-top:15px; width:30%;" class="btn"> Submit! </button>
    </form>
<div>
</div>
<footer><button class="btn" style="width:30%"><a href="display.php" style="text-decoration:none; color:#ff6e40;"> Show To-Do List</a></button></footer>
</body>
</html>