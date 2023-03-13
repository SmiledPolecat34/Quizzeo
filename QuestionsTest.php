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
            <?php
            session_start();
                $idQuizz=$_SESSION['idarecup'];
                var_dump($_SESSION);
                $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");                
                if($_SESSION['i']==null){
                    $i=0;
                }else{
                    $i=$_SESSION['i'];
                }
                $d=array();
                while($ligne=mysqli_fetch_array($Quizz)){
                    $d[]=$ligne['intituleQuestion'];
                }
                $u=$i+1;

                $nbrQuestion=count($d);
                
                if($i<$nbrQuestion){
                    echo "<h2 id='question'>"."$u : ".$d[$i]."\r\n"."</h2>";    
                }

                //Displaying data for each row
                // if (mysqli_num_rows($Quizz) > 0) {
                //     while ($ligne = mysqli_fetch_array($Quizz)) {
                //         echo "<div id='variable a passer'>"."$i : ".$ligne["intituleQuestion"]."\r\n"."</div>";
                //         $i++;
                //     }}
            ?>
            
                    
                    <?php
                    //Display of choice a thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                    $e=array();
                    while($ligne=mysqli_fetch_array($Quizz)){
                        $e[]=$ligne['choix_1'];
                    }
                    $nbrQuestion=count($d);
                    if($i<$nbrQuestion){
                        echo "<ul>";
                        echo"<li>";
                        echo"<input type='radio' name='choix' id='a' class='reponse' required>";
                        echo"<label for='a' name ='atext' id='a_text'>$e[$i]</label>";
                        echo"</li>";
                    }
                    // if (mysqli_num_rows($Quizz) > 0) {
                    //   while ($ligne = mysqli_fetch_array($Quizz)) {
                    //       echo "<div id='variable a passer'>".$ligne["choix_1"]."\r\n"."</div>";
                    //   }}
                    
                      
                ?>
                
                <li>
                    
                    <?php
                    //Display of choice 2 thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                    $f=array();
                    while($ligne=mysqli_fetch_array($Quizz)){
                        $f[]=$ligne['choix_2'];
                    }
                    $nbrQuestion=count($d);
                    if($i<$nbrQuestion){
                            echo "<input type='radio' name='choix' id='b' class='reponse'required>";
                            echo "<label for='b' name ='b_text' id='btext'>$f[$i]</label>";
                    }
                    // if (mysqli_num_rows($Quizz) > 0) {
                    //     while ($ligne = mysqli_fetch_assoc($Quizz)) {
                    //         echo "<div id='variable a passer'>".$ligne["choix_2"]."\r\n"."</div>";
                    //     }}
                    ?>
                </li>
                <li>

                </li>
                <?php
                    //Display of choice 3 thanks to the database
                    $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                    $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                    $f=array();
                    while($ligne=mysqli_fetch_array($Quizz)){
                        $f[]=$ligne['choix_3'];
                    }
                    $nbrQuestion=count($f);
                    if($i<$nbrQuestion){
                            echo "<input type='radio' name='choix' id='c' class='reponse' required >";
                            echo "<label for='c' id='c_text'>$f[$i]</label>";
                    }
                    // if (mysqli_num_rows($Quizz) > 0) {
                    //     while ($ligne = mysqli_fetch_assoc($Quizz)) {
                    //         echo "<div id='variable a passer'>".$ligne["choix_3"]."\r\n"."</div>";
                    //     }}
                ?>
                <li>
                    <?php
                                 
                //Display of choice 4 thanks to the database
                  $mysqli = new mysqli("localhost", "root", "", "quizzeo");
                  $Quizz=$mysqli->query("SELECT * FROM `quizzeo`.`question` WHERE Id_quizz='$idQuizz';");
                  $g=array();
                  while($ligne=mysqli_fetch_array($Quizz)){
                      $g[]=$ligne['choix_4'];
                  }
                  $nbrQuestion=count($g);
                  if($i<$nbrQuestion){
                    echo"<input type='radio' name='choix' id='d' class='reponse' required>";
                    echo"<label for='d' id='d_text'>$g[$i]</label>";
                  }
                //   if (mysqli_num_rows($Quizz) > 0) {
                //     while ($ligne = mysqli_fetch_assoc($Quizz)) {
                //         echo "<div id='variable a passer'>".$ligne["choix_4"]."\r\n"."</div>";
                //     }}
                if(isset($_POST["Submit"])){
                    $i++;
                    $_SESSION['i']=$i;
                    if(isset($_POST["choix"])){
                        $aa=$_POST["choix"];
                        $_SESSION['aa']=$aa;
                    }

                    if($i>$nbrQuestion-1){
                        $_SESSION['i']=null;
                        $_SESSION['nbrquest']=$nbrQuestion;
                        header("Location: http://localhost/Quizzeo/score.php");
                    }else{
                        header("Location: http://localhost/Quizzeo/QuestionsTest.php");
                        $_SESSION['score']=$score;
                    }
                }
              ?>

                </li>

                
            </ul>
            
        </div>

        <button id="submit" name="Submit" value="suivant" >Submit</button>
    
    </div>
            

    <!-- <script src="QuestionsTest.js"></script> -->

</body>
</html>