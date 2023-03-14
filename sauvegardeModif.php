<?php
session_start();


if(isset($_POST['Modifier'])){
    $id = $_POST['$id'];
    $pseudo=$_POST['$Pseudo'];

    echo $Pseudo;
    echo $id;

//$mysqli->query("UPDATE `quizzeo`.`utilisateur` SET `pseudutilisateuro` = '$Pseudo' WHERE Id_utilisateur='$id';");
}
?>