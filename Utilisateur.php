<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");

    $id_Utili= 3;
//     //$id_Utili=$_POST['Id_utilisateur'];

// function SupprimerUtili($id_Utili){
//     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
//     $mysqli->query("DELETE FROM `quizzeo`.`utilisateur` WHERE (`Id_utilisateur` = '$id_Utili');");
//     header("Refresh:0");
//     echo "L'utilisateur a été supprimé";
// }
// if(isset($_POST["supprimer"])){
//     SupprimerUtili($id_Utili);
// }


function ModifierUtili(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
    $id = $_POST['Id_utilisateur'];
    
    $modif = "UPDATE `quizzeo`.`utilisateur` WHERE Id_utilisateur='$id'";
    // $requete=mysqli_query($modif,$mysqli) or die (mysql_error());
    // if($requete){
    //     echo("ok");
    // }else{
    //     echo "error";
    // }
}
ModifierUtili();

?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='GestionUtili.css'>
    <title>QUIZZEO_Gestion_Utilisateur</title>
</head>
<body>
    <!-- <header class="title">
            <h1>Quizzeo</h1>
    </header> -->

</body>

