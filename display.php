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
    <h3 style="text-align: center; font: size 20px; margin-top: -25px;">Your daily dose of productivity</h3></div><br>
    <div class="container">
    <p style="font-size:30px;"> View your To-Do list</p>
    <form action="display.php" method="post" style="margin-bottom: 20px;">
        <input type="text" name="name" id="name" placeholder="Enter name" style="width:70%; height: 30px;"><br> <br>
        <button style="margin-top:15px; width:30%;" class="btn"> Submit! </button>
    </form>
        <table class="table table-striped table-hover table-border" style="width:77%;">
            <?php
           error_reporting(0);
            $conn=mysqli_connect("localhost","root","","todo");
          //  if(isset($_POST['done'])){
            $name=$_POST['name'];
            if($name) {
            $q="select * from list where Name='$name'";
            $sql=mysqli_query($conn,$q);
            echo "<h2> $name's To-Do List!</h2>";
            while($res=mysqli_fetch_array($sql)) {
?>
            <tr>
                <td style="margin-left=-20px;"> <?php echo $res['Chore'];?></td>
                <td> <button onclick="done()"  style="background-color: #ff6e40; color:#f5f0e1; margin-top: 20px; margin-left:-20px; padding:5px; padding-left: 10px; padding-right: 10px;  border: #ff6e40 1px solid;   border-radius: 10px; cursor: pointer;">
                    <a href="delete.php?chore=<?php echo $res['Chore']; ?>"> Done! </a>                    
                </button></td>
            </tr>
        <?php }} 
         ?>
        </table>
<div>
</div>
<footer><button class="btn" style="width:30%; color:#ff6e40;"><a href="add.php" style="text-decoration:none; color:#ff6e40;"> Add a chore</a></button></footer>
</body>
</html>