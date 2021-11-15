<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="swigg";
  
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
 $sql="SELECT * FROM user WHERE username ='$username'";
 $result=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($result);
 $sql2="SELECT * FROM user WHERE email ='$email'";
 $result2=mysqli_query($conn,$sql2);
 $num2=mysqli_num_rows($result2);
 if($num==1)
 {
    // header('location:account.html'); 
     echo '<script>alert("username alerady taken")</script>';
     
 }
 elseif($num2==1){
   
    // header('location:account.html'); 
    echo '<script>alert("email alerady taken")</script>';
}
 else{
     $reg="insert into user(username,password,email) values ('$username','$password','$email')";
     mysqli_query($conn,$reg);
     echo '<script>alert("registerd succefully")</script>';
 }
 
?>