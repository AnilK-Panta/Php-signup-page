<?php
$insert=false;
if(isset($_POST['username'])){
$server= "localhost";
$uname = "root";
$password = "";

$con = mysqli_connect($server, $uname, $password);

if(!$con){
    die("connection in this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";


$username = $_POST['username'];
$email = $_POST['email'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$sql = "INSERT INTO `signup`.`signup` (`username`, `email`, `pw`, `cpw`, `dt`) VALUES ('$username', '$email', '$pw', '$cpw', current_timestamp());";

// echo $sql;
if($con->query($sql) == true){
    // echo "Successfully Inserted";
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <?php
        if($insert == true){
           echo "<p class='login'>Congratulations: SIGNUP Successful</p>";
        }
        ?>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="index.php" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text email" type="Email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="pw" placeholder="Password" required="">
                    <input class="text w3lpass" type="password" name="cpw" placeholder="Confirm Password" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <button>SIGNUP</button>
                    <!-- <input type="submit" value="SIGNUP"> -->
                </form>
                <p>Don't have an Account? <a href="#"> Login Now!</a></p>
            </div>
        </div>
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>

</html>

<!-- UPDATE `signup` SET `sno`='[value-1]',`username`='[value-2]',`email`='[value-3]',`pw`='[value-4]',`cpw`='[value-5]',`dt`='[value-6]' WHERE 1 -->

<!-- INSERT INTO `signup` (`sno`, `username`, `email`, `pw`, `cpw`, `dt`) VALUES ('1', 'ak_panta', 'anil@gmail.com', 'aliali', 'aliali', 'current_timestamp()'); -->

