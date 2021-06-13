<?php

session_start();
header('location:register.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'mydb');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "SELECT * FROM username where user ='$name' && password = '$pass'"; 
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
 {
 header('location:home.php');

}
else {
    $reg= "INSERT INTO username( user , password) 
    VALUES ('$name' , '$pass')";
    mysqli_query($con, $reg);
    header('location:home.php');
}

 ?>