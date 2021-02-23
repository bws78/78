<?php
$insert = "false";
if(isset($_POST['name'])){
    $insert ="true";
$server ="localhost";
  $username ="root";
$password ="";

$con = mysqli_connect($server, $username , $password);

if(!$con){
    die("connection to this database failed due to" .
    mysqli_connect_error());
}
// echo "success connecting to db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql ="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `date time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp());";
//echo $sql;

if($con->query($sql)  == true){
  //  echo "successfully submitted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NIT Jalandhar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>welcome to trip with NIT Jalandhar</h1>
        <p>enter the form and submit for confirmation</p>
       
            <?php 
            if($insert == true){
            echo "<p class= 'submitmsg'>thanks for submitting </p>";}
            ?>
           

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="name"><br>
            <input type="text" name="age" id="age" placeholder="age"><br>
            <input type="text" name="gender" id="gender" placeholder="gender"><br>
            <input type="email" name="email" id="email" placeholder="enter your email"><br>
            <input type="phone" name="phone" id="phone" placeholder="enter your phone"><br>
            <button class="btn">submit</button>
            <button class="btn">reset</button>



        <!--INSERT INTO `trip` (`sr no`, `name`, `age`, `gender`, `email`, `phone`, `date and time`) VALUES ('2', 'thisisname', '18', 'male', 'this@this.com', '9999999999', current_timestamp());-->

        </form>
    </div>

<script src="index.js"></script>
    
</body>
</html>