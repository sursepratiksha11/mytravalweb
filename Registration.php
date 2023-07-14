<?php
$conn=mysqli_connect('localhost','root');

if($conn){
    echo "connection is eastablish";
}
else{
    echo "error connection failed";
}

mysqli_select_db($conn,'registration');

$Fullname=$_POST['fullname'];
$Username=$_POST['username'];
$Email=$_POST['email'];
$Pno=$_POST['pno'];
$Pass=$_POST['pass'];
$Address=$_POST['addres'];
$Country=$_POST['country'];
$Gender=$_POST['gender'];

 $data="INSERT INTO registrationinfo (fullname ,username, email , pno, pass, addres, country, gender) VALUES ('$Fullname', '$Username', ' $Email ', '$Pno', '$Pass', '$Address',  '$Country', '$Gender')";

 mysqli_query($conn, $data);
 header('location:p.php');