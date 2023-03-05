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
    <div class="question">
        <p class="questions">Question n°
        <?php
        $idQuizz=3;
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
        $i=1;
        echo "$i : ";
        if (mysqli_num_rows($Quizz) > 0) {
          //Displaying data for each row
          while ($ligne = mysqli_fetch_assoc($Quizz)) {
              echo $ligne["intituleQuestion"]."\r\n";
          }}

        ?>
          </p>
        <div class="questions">
            <input type="checkbox" id="case" name="case" checked>
            <label for="case">
              <?php
                //Display of choice 1 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                  if (mysqli_num_rows($Quizz) > 0) {
                      while ($ligne = mysqli_fetch_assoc($Quizz)) {
                          echo $ligne["choix_1"]."\r\n";
                      }}
              ?>
            </label>
        </div>
        <div class="questions">
          <input type="checkbox" id="case" name="case">
          <label for="case">
          <?php
                //Display of choice 2 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                  if (mysqli_num_rows($Quizz) > 0) {
                      while ($ligne = mysqli_fetch_assoc($Quizz)) {
                          echo $ligne["choix_2"]."\r\n";
                      }}
              ?>
          </label>
        </div>
        <div class="questions">
          <input type="checkbox" id="case" name="case">
          <label for="case">
          <?php
                //Display of choice 3 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                  if (mysqli_num_rows($Quizz) > 0) {
                      while ($ligne = mysqli_fetch_assoc($Quizz)) {
                          echo $ligne["choix_3"]."\r\n";
                      }}
              ?>
          </label>
        </div>
        <div class="questions">
          <input type="checkbox" id="case" name="case">
          <label for="case">
          <?php
                //Display of choice 4 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                  if (mysqli_num_rows($Quizz) > 0) {
                      while ($ligne = mysqli_fetch_assoc($Quizz)) {
                          echo $ligne["choix_4"]."\r\n";
                      }}
              ?>
          </label>
        </div>
    </div>
</body>
</html>