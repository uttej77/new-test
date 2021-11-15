<?php
   session_start();
   $dbhost="localhost";
   $dbuser="root";
   $dbpass="";
   $db="swigg";

   $conn= new mysqli($dbhost,$dbuser,$dbpass,$db);
   $username=$_POST['username'];
   $password=$_POST['password'];
   echo $username;
   echo $password;
    $sql= "SELECT * FROM user WHERE username ='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if ($username==""&&$password=="")
 {
     header('location:index.html'); 
     
 }
 if ($row['username']==$username && $row['password']==$password)
 {
    $_SESSION['user']=$username;
    header('location:home.php');

 }
 else {
     echo "<script>alert('check you are creditnails')</script>";
     echo "<script> location.replace('index.html')</script>";
 }
?>