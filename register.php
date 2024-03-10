<?php 
session_start();
header('location:Login.html');

$con= mysqli_connect('localhost','root');
if($con){
    echo"connection succsessful";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'login_page');

// $name = $_POST['name'];
// $email = $_POST['email'];
// $pass = $_POST['password'];
$name = ($_GET['name']); 
$email = ($_GET['email']); 
$pass =  ($_GET['password']); 



$q = "select * from  users where Username ='$name' && Email='$email' && Password='$pass' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1){
    echo"Duplicate data";

}
else{
    $qy="insert into users(Username,Email,Password) value ('$name','$email', '$pass') ";
    mysqli_query($con,$qy);
}
?>
<!-- Username	Email	Password -->