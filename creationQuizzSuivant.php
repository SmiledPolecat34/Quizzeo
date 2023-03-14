<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz_Suivant</title>
    <link rel="stylesheet" href="creationQuizzSuivant.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <div class="organisation">
        <form action="creationQuizzSuivant.php" method="post">
        <div id="Crea">
            <label for="question">
                Question :
            </label>
            <input id="question" type="text" name="question" placeholder="Votre question"/>
            <br>
            <label for="choix">
                Choix 1:
            </label>
            <input id="choix" type="text" name="choix1" placeholder="Choix"/>
            <br>
            <label for="choix">
                Choix 2:
            </label>
            <input id="choix" type="text" name="choix2" placeholder="Choix"/>
            <br>
            <label for="choix">
                Choix 3:
            </label>
            <input id="choix" type="text" name="choix3" placeholder="Choix"/>
            <br>
            <label for="choix">
                Choix 4:
            </label>
            <input id="choix" type="text" name="choix4" placeholder="Choix"/>
            <br>
            <label for="reponse">
                Réponse:
            </label>
            <input id="reponse" type="text" name="reponse" placeholder="Réponse"/>
            <input type="submit" name="question_suivante" value="Question suivante" class="submit-suivant2">
            <input type="submit" name="stop_question" value="Arrêter les questions" class="submit-suivant3">

            <?php
            session_start();
            //Retrieves quiz id
            $nomQuizz=$_SESSION['titre'];
            $categorieQuest=$_SESSION['categorie'];
            $dateCreation=$_SESSION['date'];
            //Adding a question in database
            function NouvelleQuestion ($nomQuizz,$categorieQuest,$dateCreation){
                $intituleQuestion = $_POST['question'];
                $choix_1 = $_POST['choix1'];
                $choix_2=$_POST['choix2'];
                $choix_3=$_POST['choix3'];
                $choix_4=$_POST['choix4'];
                $reponse=$_POST['reponse'];
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                $idQuizz=$mysqli->query("SELECT * FROM `quizzeo`.`quizz` where titre='$nomQuizz' AND categorie='$categorieQuest' AND date_creation='$dateCreation';");
                $user = mysqli_fetch_array($idQuizz);
                $id_quizz = $user["Id_quizz"];
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                $mysqli->query("INSERT INTO `quizzeo`.`question` (`intituleQuestion`, `choix_1`, `choix_2`, `choix_3`, `choix_4`, `reponse`, `Id_quizz`) VALUES ('$intituleQuestion', '$choix_1', '$choix_2', '$choix_3', '$choix_4','$reponse', '$id_quizz');");
            }
         function Question($nomQuizz,$categorieQuest,$dateCreation){
                //If the button is pressed, starts the function
                if(isset($_POST["question_suivante"])){
                    NouvelleQuestion ($nomQuizz,$categorieQuest,$dateCreation);
                    header("Location: http://localhost/Quizzeo/creationQuizzSuivant.php");
                }     
        }
        
        //Launches the function
        if (isset($_POST["question_suivante"])){
            Question($nomQuizz,$categorieQuest,$dateCreation);
        }
        //Stop adding questions
        elseif(isset($_POST["stop_question"])){
            NouvelleQuestion ($nomQuizz,$categorieQuest,$dateCreation);
            header("Location: http://localhost/Quizzeo/accueil.php");
        }   
        
            ?>
        </div>
        </form>
</body>
</html>