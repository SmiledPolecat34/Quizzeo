
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Statistiques.css">
    <title>Statistiques</title>
</head>

<body>
    <header>
        <div id="container">
            <div id="title1">
                <h1>
                    QUIZZEO
                </h1>
            </div>
            <div class="statistiques">
                <h2>
                    Statistiques
                </h2>
            </div>
            <div class="rubriqueMenu">
                <div class ="retourProfil">
                    
                    <a href="accueil.php" class="retourProfil">Retour</a>
                </div>
                <div class="rubriqueScore">
                <?php
                    session_start();
                    // var_dump($_SESSION);
                    $nbrquest=$_SESSION['nbrquest'];
                    $score=$_SESSION['scores'];
                    function Score($nbrquest,$score){
                        $total = $score / $nbrquest * 100;
                        echo "Votre score est de : $total %";
                    }
                    Score($nbrquest,$score);
                    ?>
                </div>
                <div class ="allText"><p class="salut">Bonjour, <br><br>Nous espérons que vous allez bien ! <br> <br>Vous voici sur votre page "statistiques" !</p>
                </div>
            </div>
            <div class='dedicace'>
                Designed by Group 2.
            </div>
        </div>
    </header>
</body>
</html>