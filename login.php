<?php
$conn =mysqli_connect("localhost","root","","schoolinfo") ;

if(!$conn){
    die("connect lost");

}

$username=$_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM instructortable where username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    header("location: page");
    exit();


}
else{
    echo"Login Failed";

}
mysqli_close($conn);
?>