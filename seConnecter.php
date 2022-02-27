<?php

require('database.php');
// At data base
$user_Email = trim($_REQUEST['email']);
$user_Password = trim($_REQUEST['password']);
echo("</br> votre email est : ".$_REQUEST['email']);
echo("et votre mot de passe est : ".$_REQUEST['password']);

$requete = " SELECT Prenom, Nom FROM utilisateur WHERE Email= '". $user_Email ."'" ;

$result = mysqli_query($conn, $requete); 

$row = mysqli_num_rows($result);
//echo "code:". $row;
if ($row > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Prenom" . $row["Prenom"]. "Nom" . $row["Nom"]. "<br>";
    //Authentifiaction of user on the site et retrieve the his information/data in the variable global session
    $_SESSION['authen'] = true;
    $_SESSION['Prenom'] = $row["Prenom"];
    $_SESSION['Nom'] = $row["Prenom"];

    header('Location: menu.html'); }
  
} 

else{
  echo "email n'existe pas";

}


?>
