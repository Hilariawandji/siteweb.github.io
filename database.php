<?php
   //two codes for connecting DB are working well
/*try{
  new PDO('mysql:host=localhost; dbname=bililarestaurant;charset=utf8;', 'root', '');
  echo "Connected successfully";
}catch(Exception $e){
  die('Une erreur a été trouvée : ' . $e->getMessage());
}*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bililarestaurant";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>