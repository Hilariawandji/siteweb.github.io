<?php

require('database.php');

//validation of formulaire
if(isset($_POST['validate'])){
   //verifier if user completed the information required
    if(!empty($_POST['FirstName']) AND !empty($_POST['LastName']) AND !empty($_POST['BirthDate']) AND !empty($_POST['StreetNumber']) AND
    !empty($_POST['StreetName']) AND !empty($_POST['PostalCode']) AND !empty($_POST['City']) AND !empty($_POST['Email']) AND !empty($_POST['Password'])){
         //Data of the user
         $user_FirstName = htmlspecialchars ($_POST['FirstName']);
         $user_LastName = htmlspecialchars ($_POST['LastName']);
         $user_BirthDate = htmlspecialchars ($_POST['BirthDate']);
         $user_StreetNumber = htmlspecialchars ($_POST['StreetNumber']);
         $user_StreetName = htmlspecialchars ($_POST['StreetName']);
         $user_PostalCode = htmlspecialchars ($_POST['PostalCode']);
         $user_City = htmlspecialchars ($_POST['City']);
         $user_Email = htmlspecialchars ($_POST['Email']);
         $user_Password = password_hash ($_POST['Password'], PASSWORD_DEFAULT);

            // retrieve the user information
         $requete = " SELECT `Prenom`, `Nom` FROM `utilisateur` WHERE `Email`= ' . $user_Email. '";
         $result = mysqli_query($conn, $requete);
         $row = mysqli_num_rows($result);
          //echo "code:". $row;
          if ($row > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
               echo "L'utilisateur existe déjà sur le site";
            }
         }else{
            //insert user information in DB
            $sql = "INSERT INTO utilisateur (Prenom, Nom, Date_Naissance, Num_Rue, Rue, Code_Postal, Ville, Email, Mot_Pass) VALUES ('".$user_FirstName."','".$user_LastName."','".$user_BirthDate."','".$user_StreetNumber."','".$user_StreetName."','".$user_PostalCode."','".$user_City."','".$user_Email."','".$user_Password."')" ;
            echo $sql;
               //Verify if the user already existe 
            if (mysqli_query($conn, $sql)) {
               echo "New records created successfully";
            } else {
               echo"Veuillez reessayez un probleme est survenu";
            }
         };
    }
    else{echo "Veuillez compléter tous les champs...";}
    
      

    //redirect the user to the page d'acceuille
    header('Location: connecter.html');


}


         //$checkIfUserAlreadyExists = $dbname->prepare('SELECT Email From utilisateur WHERE Email = ?');
         //$checkIfUserAlreadyExists->excute(array($user_Email));

//if($checkIfUserAlreadyExists->rowCount() 0){

            //$insertUserOnWebsite == $dbname->prepare('INSERT INTO utilisateur (FirstName, LastName, BirthDate, StreetNumber, StreetName, PostalCode, City, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
            //$checkIfUserAlreadyExists->excute(array($user_Email, $user_LastName, $user_BirthDate, $user_StreetNumber, $user_StreetName, $user_PostalCode, $user_City, $user_Email, $user_Password));

         //}else{
            //$errorMsg("L'utilisateur existe déjà sur le site");

         //}

    //}else{
       // 
    //}



?> 