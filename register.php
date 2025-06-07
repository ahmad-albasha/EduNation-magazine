register.php
<?php
session_start();
include "con.php";

if($_POST["email"]
 && $_POST["pass1"]
 && $_POST["pass2"]  
 && $_POST["fname"] 
 )
{
	if($_POST["pass1"]==$_POST["pass2"])
	{
    $code = mysqli_real_escape_string($con,$_POST['fname']);    
    $sql="insert into users ( email,Pass  ) values('$_POST[email]','$_POST[pass1]') ";   
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));		
    $sql1="insert into users(id, name, email, pass) 
    values (null, '$_POST[fname]' ,'$_POST[email]','$code' ) ";   
    $result1=mysqli_query($con,$sql1) or die(mysqli_error($con));		
   
    echo '<script type="text/javascript"> alert("Registered successfully   ") </script>';  	 
    header("location: login.php");  
	}	
   echo '<script type="text/javascript"> alert("No matching password  ") </script>';  	 
}
else 
  echo '<script type="text/javascript"> alert("Invalid data   ") </script>';  	 

?>