<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz</title>
    <link rel="stylesheet" href="modificationQuizz.css">
</head>

<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <div class="organisation">
        <?php
        session_start();

        $id = $_POST["id_utilisateur"];
        // echo "L'id de l'utilisateur sélectionner est : ".$id."<br />";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");

        $sql = "SELECT pseudutilisateuro, Id_utilisateur FROM `quizzeo`.`utilisateur`WHERE Id_utilisateur='$id'";
        $result = mysqli_query($mysqli, $sql);
        $actualUser = mysqli_fetch_assoc($result);

        echo "<form action='GestionUtili.php' method='post'>";
        $id = $actualUser['Id_utilisateur'];
        $Pseudo = $actualUser['pseudutilisateuro'];


        echo "<label for='pseudo'>";
        echo "<label for='nom'>
                        <br> 
                        Pseudo : 
                        </label>";
        echo "<input class='input' type='text' name='pseudo' id='pseudo'  value='$Pseudo'>";

        echo "<input type='submit' name='Modifier' value='Modifier' class='submitModifier'>  
                        </form>";

        if (isset($_POST['Modifier'])) {
            // $id = $_POST['$id'];
            $pseudo = $_POST['pseudo'];

            echo $Pseudo;
            echo $id;

            $mysqli->query("UPDATE `quizzeo`.`utilisateur` SET `pseudutilisateuro` = '$pseudo' WHERE Id_utilisateur='$id';");
        }
        ?>
        <br>
        <a href="GestionUtili.php" class="retour">Retour</a>
        </form>
    </div>
</body>

</html>