<?php
require('database.php');

$user_nom = trim($_REQUEST['nom']);
$user_email = trim($_REQUEST['email']);
$user_téléphone = trim($_REQUEST['téléphone']);
$user_Date = trim($_REQUEST['Date']);
$user_time = trim($_REQUEST['time']);
$user_nombre = trim($_REQUEST['nombre']);
$user_message = trim($_REQUEST['message']);


echo("</br> votre email est : ".$_REQUEST['email']);
echo("et votre nom est : ".$_REQUEST['nom']);

$requete = " SELECT Prenom, Nom FROM utilisateur WHERE Email= '". $user_email ."'" ;

$result = mysqli_query($conn, $requete); 

$row = mysqli_num_rows($result);
//echo "code:". $row;
if ($row > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      //insert user information in DB
    $sql = "INSERT INTO réservation (nom, email,téléphone,Date , time, nombre, message) VALUES ('".$user_nom."','".$user_email."','".$user_téléphone."','".$user_Date."','".$user_time."','".$user_nombre."','".$user_message."')" ;
    echo $sql;
    echo "New reservation recorded";
    }
         //Verify if the user already existe 
      /*if (mysqli_query($conn, $sql)) {
         echo "New reservation recorded";
         else{
            echo "remplir obligagoirement les champs"; 
         }*/
} else{
    $_SESSION['authen'] = true;
    $_SESSION['Prenom'] = $row["Prenom"];
    $_SESSION['Nom'] = $row["Prenom"];

    header('Location: connecter.html');
  } 
    //echo "Prenom" . $row["Prenom"]. "Nom" . $row["Nom"]. "<br>";
    //Authentifiaction of user on the site et retrieve the his information/data in the variable global session
    
  












/*class réservation{
    // CONSTRUCTOR - CONNECT TO DATABASE
	private $pdo;
	private $stmt;
	public $error;
	//function__construct() {
	//	try {
          // $this->pdo = new PDO(
           	//"mysql:host=".DB_HOST."dbnom=".DB_NAME.";charset=".DB_CHAR, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION]
           //);
		//}  catch(Exception $ex) {exit($ex->getMessage());}
	//}

	//DESTRUCTOR - CLOSE DATABASE CONNECTION
 /*function __destruct () {
 	$this->pdo - null;
 	$this->stmt = null;
 }


 function save($Date, $nom, $email, $téléphone, $time, $nombre, $message){
 	try {  
 	//$this->stmt = $this->pdo->prepare("INSERT INTO 'réservation' ('Date', 'nom', 'email', 'téléphone', 'time', 'nombre', 'message') VALUES(?,?,?,?,?,?,?)");
 	$this->stmt->execute([$Date, $nom, $email, $téléphone, $time, $nombre]);
 	return true;
 } catch(Exception $ex) {
 	$this->error = $ex->getMessage();
 	return false;
 	}
 } 
}

//DATABASE SETTINGS
define("DB_HOST", "localhost");
define("DB_NAME", "test");
define("DB_CHAR", "utf8");
define("DB_USER", "root");
define("DB_PASS", "");

// NEW RESERVATION OBJECT

$_RSV = new réservation();

echo $_RSV->save("modou", "modoupouye@gmail.com", "0753905406", "2022-01-22", "12:13", "3", "j'arrive");
"OK" ;
//$_RSV->error;*/
?>