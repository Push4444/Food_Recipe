










<!DOCTYPE html>
<html>
<head>
<style>
.container{

    border: 2px solid black;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 50px;
}




</style>



</head>




   <body>
     

<div class="container">
 
        <span>
        
        
          










 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
echo " ";
}




if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
$sql = "INSERT INTO sandwidtch (name,pass)
VALUES ('$name ','$message ')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}




$sql = "SELECT name,pass  FROM sandwidtch";
$result = mysqli_query($conn, $sql);
        
        
        if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
    $name=$row["name"];
    $com=$row["pass"];
  
    echo "<font color=\"red\"  size=\"5\"   face=\"Verdana\">   $name  </font><br>";
     echo "<font color=\"\"  size=\"6\"   face=\"Verdana\">   $com  </font><br>";
    
    
  }
} else {
  echo "No comments";
}



?>









       
        
        

        </span>
      </div>
    





    
   </body>
</html>

