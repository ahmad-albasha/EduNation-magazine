<?php

include 'con.php';


$sql = "SELECT * FROM `file`";
$res = mysqli_query($con , $sql);
$files = mysqli_fetch_all($res,MYSQLI_ASSOC);




if(isset($_POST['save']))
{

$fname = $_FILES['myfile'] ['name'];
$destination='uploads/'.$fname;
$extention= pathinfo($fname,PATHINFO_EXTENSION);
$file = $_FILES['myfile'] ['tmp_name'];
$size = $_FILES['myfile'] ['size'];



if(!in_array($extention,['zip','pdf','png','jpg']))
{
    echo"your file extention must be :['zip','pdf','png','jpg']";
}
elseif($_FILES['myfile']['size'] >20000000)
{
   echo"file is too large"; 
}
else
{
    if(move_uploaded_file($file,$destination))
    {
       $query="insert into file(name,size,downloads)VALUES('$fname','$size',0)";
       if(mysqli_query($con,$query))
         echo"file uploaded ok";
       else
       {
        echo"failed to add to database";
        }
             
    }
    else 
    {
       echo"failed to upload"; 
    }
    

} 
exit;
    header("Location: " . $_SERVER['PHP_SELF']);
    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="up.php" method="post" enctype="multipart/from-data">Select file to upload1:
        <input type="file" name="myfile" id="myfile">
        <input type="submit" name="save" value="Upload File">
    
    </form>

    <div>
          <?php 
          echo"<br/><br/>";
          ?>   
        </div>
        
        </br></br><h1>Your Files:</h1><hr>
	 <table border="5">
              <thead>
              <th> ID</th><th>FILE NAME</th><th>SIZE_byte</th><th>DOWNLOADS</th><th>ACTION</th><th>Delete</th>  
              </thead>  
              <tbody>
                <?php foreach ($files as $f){?>
                  <tr>
                      <td><?php echo$f['id'];?></td>
                       <td><?php echo$f['name'];?></td> 
                        <td><?php echo$f['size']/1000;?></td> 
                         <td><?php echo$f['downloads'];?></td> 
                         <td><a href="page3.php?file_id=<?php echo $f['id'];?>">Download </a>   </td>
						 <td><a href="page4.php?file_id=<?php echo $f['id'];?>&file_name=<?php echo $f['name'] ?>">Delete</a>   </td>
                  </tr>
                <?php }
                ?>
              </tbody>
          </table> 
	 <a href="page2.php">upload</a>
		  </br></br>
</body>
</html>