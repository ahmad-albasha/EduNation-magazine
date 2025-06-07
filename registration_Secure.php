registration_Secure.php
<?php
session_start(); // Starting Session
include "con.php";
$sql = "SELECT * FROM `users`";
$all_majors = mysqli_query($con,$sql);
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
        </ul>
      </nav>
    </header>
    <main>
	<div class="slide">
  <div id="login">
<FORM ACTION="register_Secure.php" METHOD="post"  >
<h1>Welcome to the Secure registration page</h1>
Please input the registration details to create a new account<br>
<table >
  <!-- Personal information -->

<tr>
<td class ="lab" >Name :</td><td><input name="fname" type="text" ></input></td>
</tr>

  <?php
     while ($major = mysqli_fetch_array(
            $all_majors,MYSQLI_ASSOC)):;
   ?>
    <option value="<?php echo $major["code"];?>">
                  <?php echo $major["description"];
                // To show the major description  to the user
       ?>
     </option>
      <?php
       endwhile;
       // While loop must be terminated
       ?>
    </select>
</td>
<td class ="lab">Email :</td><td><input name="email" type="email" ></input></td>
</tr>
<td class ="lab">Password:</td><td><input name="pass1" type="password" ></input></td>
<td class ="lab">Confirm :</td><td><input name="pass2" type="password" ></input></td>
</tr>
</table>
 <input type="submit" value="register me!"></input>
</FORM>
  </div>
<!--  footer -->
<footer>    
      <div class="bottom-bar">   
        <div class="copyright">
          Copyright &copy 2025  
        </div>
      </div>
    </footer>
          <!-- end footer -->  
     <script src="js/script.js"></script>                 
</body>
</html>