<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="QuestionsTest.css">
    <title>Quiz questions</title>
</head>
<body>
    
    <div class="quiz-container" id ="quiz">
        <div class="quiz-header">
        <form action="QuestionsTest.php" method="post">
            <h2 id="question" >Question Text</h2>
            <?php
                $idQuizz=4;
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                $i=1;
                //Displaying data for each row
                if (mysqli_num_rows($Quizz) > 0) {
                    while ($ligne = mysqli_fetch_assoc($Quizz)) {
                        echo "<div id='variable a passer'>"."$i : ".$ligne["intituleQuestion"]."\r\n"."</div>";
                        $i++;
                    }}
            ?>
            <ul>
                <li>
                    <input type="radio" name="a" id="a" class="reponse">
                    <label for="a" name ="atext" id="a_text">Réponse a</label>
                    <?php
                    $idQuizz=4;
                    //Display of choice a thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                    if (mysqli_num_rows($Quizz) > 0) {
                      while ($ligne = mysqli_fetch_assoc($Quizz)) {
                          echo "<div id='variable a passer'>".$ligne["choix_1"]."\r\n"."</div>";
                      }}
                      
                ?>
                </li>
                <li>
                    <input type="radio" name="b" id="b" class="reponse">
                    <label for="b" name ="btext" id="btext">Réponse b</label>
                    <?php
                    $idQuizz=4;
                    //Display of choice 2 thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                    if (mysqli_num_rows($Quizz) > 0) {
                        while ($ligne = mysqli_fetch_assoc($Quizz)) {
                            echo "<div id='variable a passer'>".$ligne["choix_2"]."\r\n"."</div>";
                        }}
                    ?>
                </li>
                <li>
                    <input type="radio" name="c" id="c" class="reponse">
                    <label for="c" id="c_text">Réponse c</label>

                </li>
                <?php
                    $idQuizz=4;
                    //Display of choice 3 thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz' order by id asc limit 1;");
                    if (mysqli_num_rows($Quizz) > 0) {
                        while ($ligne = mysqli_fetch_assoc($Quizz)) {
                            echo "<div id='variable a passer'>".$ligne["choix_3"]."\r\n"."</div>";
                        }}
                ?>
                <li>
                    <input type="radio" name="d" id="d" class="reponse">
                    <label for="d" id="d_text">Réponse d</label>
                    <?php              
                $idQuizz=4;
                //Display of choice 4 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                  if (mysqli_num_rows($Quizz) > 0) {
                    while ($ligne = mysqli_fetch_assoc($Quizz)) {
                        echo "<div id='variable a passer'>".$ligne["choix_4"]."\r\n"."</div>";
                    }}
              ?>
                </li>

                
            </ul>
        </div>

        <button id="submit" value="suivant" >Submit</button>
    
    </div>

    <!-- <script src="QuestionsTest.js"></script> -->

</body>
</html>