
<?php
session_start(); 
//include "crypt.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>LIU </title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content=""> 
  <link rel="stylesheet" href="login.css" > 
  <link rel="stylesheet" href="./css/Myicons.css" >
</head>
<!-- body -->
<body> 
<header>
     
    </header>
    <main>
	<div class="slide" class="login-container">
<div id="login" class="input-group">
<h2>Login </h2>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
<label>Email :</label>
<input id="name" name="email" placeholder="emali" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login " class="btn">

</form>
<p class="register-link">Don't have an account? <a href="registration.php">Register</a></p>

</div>
	</div>
<?php
include "con.php";

if (isset($_POST['submit'])) 
{
	if (empty($_POST['email']) || empty($_POST['password']))
  {
		echo '<script type="text/javascript"> alert("NO username or password found") </script>';  	
	}
  else
  {
		$username=$_POST['email'];
		$password=$_POST['password'];		

		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$sql="select * from users where pass='".$password."' AND email='".$username."'";
		$result=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($result);
    
		if ($rows == 1) 
		{ 
			$row = mysqli_fetch_array($result);
      $_SESSION['user']=$row[0];   
			  		
			header("location: commant.php");
		} 
    else 
    {
			echo '<script type="text/javascript"> alert("Username not found") </script>';			
		}
		mysqli_close($con); 
	}
}
?>
<!--  footer -->
<footer>   
<div class="div5">
        <h1>EduNation magazine &copf; 2025</h1>
    </div> 
     
    </footer>
          <!-- end footer -->  
     <script src="js/script.js"></script>                 
</body>
</html>