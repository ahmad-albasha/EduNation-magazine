
<?php

define("db_SERVER", "localhost");
define("db_USER","root");
define("db_PASSWORD","");
define("db_DBNAME", "magazine");
$con = mysqli_connect(db_SERVER,db_USER,db_PASSWORD,db_DBNAME);
if (!$con)
{
 echo '<script type="text/javascript">alert("Error connecting the server "); </script>';
} 
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>