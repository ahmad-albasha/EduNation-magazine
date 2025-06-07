login_Secure.php
<?php
session_start(); // Starting Session
define('SALT', 'd#f453dd');
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
  <link rel="stylesheet" href="./css/style1.css" > 
  <link rel="stylesheet" href="./css/Myicons.css" >
</head>
<!-- body -->
<body> 
<header>
      <!-- Navigation bar -->
      <nav class="nav-bar">
        <ul class="menu">
          <li class="logo"><a href="index.php">
              <img src="images/logo.png" alt="UMS Logo"></a></li>
          <li class="item"><a href="check.php">Check Connection </a></li> 
          <li class="item"><a href="create.php">Create DB </a></li> 
          <li class="item"><a href="createtables.php">Create Tables </a></li>    
          <li class="item"><a href="display.php">Display </a></li>
          <li class="item"><a href="ajax.php">AJAX </a></li>
          <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
      </nav>
    </header>
    <main>
	<div class="slide">
<div id="login">
<h2>Login Secure Form</h2>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<label>UserName :</label>
<input id="name" name="email" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">

</form>
<A Href="registration_Secure.php"> Sign up </A>
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
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$sql="select password from user where email='".$username."'";
		$result=mysqli_query($con,$sql);
		
    $row = mysqli_fetch_row($result); 
    if (md5(SALT . $password) == $row[0])
		{ 
      //username is matching with the password
		echo '<script type="text/javascript"> alert("Username found" .$row[0] ) </script>';  		
      $_SESSION['user']=$username; // Set the Session    
			
			header("location: display.php");
		} 
    else 
    {
			echo '<script type="text/javascript"> alert("Username not found or incorrect password ") </script>';			
		}
		mysqli_close($con); // Closing Connection
	}
}
?>
<!--  footer -->
<footer>    
      <div class="bottom-bar">   
        <div class="copyright">
          Copyright &copy 2023  
        </div>
      </div>
    </footer>
          <!-- end footer -->  
     <script src="js/script.js"></script>                 
</body>
</html>