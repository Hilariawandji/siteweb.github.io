<?php require ('signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILILA</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th{
            text-align: left;
        }
    </style>
</head>
<body>
    
    <p style="margin-left: 20%;">S'inscrire</p>
    <form class = "container"  method="post" autocomplete="off" style="margin-left: 30%;">
        <?php
        //for display values of the variables //display donnees utilisateurs we should implement php code here*/

             //if error happen
           if(isset($errorMsg))
            { echo '<p>' .$errorMsg. '</p>';}
        ?>
        <div class="mb-3">
            <label for="InputFirstName" class="form-label" >Prénom:</label>
            <input type="text" class="form-control" name="FirstName">
        </div>
        <div class="mb-3">
            <label for="InputLastName" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="LastName">
        </div>
        <div class="mb-3">
            <label for="InputBirthDate" class="form-label">Date de Naissance:</label>
            <input type="Date" class="form-control" name="BirthDate">
        </div>
        <div class="mb-3">
            <label for="StreetNumber" class="form-label">N° rue:</label>
            <input type="number" class="form-control" name="StreetNumber">
        </div>
        <div class="mb-3">
            <label for="StreetName" class="form-label">Rue:</label>
            <input type="text" class="form-control" name="StreetName">
        </div>
        <div class="mb-3">
            <label for="PostalCode" class="form-label">Code postal:</label>
            <input type="number" class="form-control" name="PostalCode">
        </div>
        <div class="mb-3">
            <label for="City" class="form-label">Ville:</label>
            <input type="text" class="form-control" name="City">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="Email">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Mot de Pass:</label>
            <input type="password" class="form-control" name="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    
         <a href="connecter.html">Retour</a>


</form>

     </form><br>
     </body>
</html>