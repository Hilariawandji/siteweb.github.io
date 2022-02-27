<?php require ('actions/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<br><br>
    <form class= "container" method= "POST">
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
    <br></form>

    
</body>
</html>