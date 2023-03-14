<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le_Quizz</title>
    <link rel="stylesheet" href="AffichageQuizz.css">
</head>
<body>
<form action="AffichageQuizz.php" method="post">

    <header class="title">
        <h1>Quizzeo</h1>
    </header>
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

</body>
</html>