
<?php 
session_start();
//  header('location:Home.html');

$con= mysqli_connect('localhost','root');
if($con){
    echo"connection succsessful";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'login_page');

$name = ($_GET['name']); 
// $email = ($_GET['email']); 
$pass =  ($_GET['password']); 


$q = "select * from  users where Username ='$name'  && 	Password='$pass' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['username'] = $name;
   header('location:Problem.php');
}
else{
    header('location:index.html');
    header('location:Login.html');
   
}
?>
<!-- Username	Email	Password -->