<?php
session_start();
var_dump($_SESSION);
$nbrquest=$_SESSION['nbrquest'];
$score=$_SESSION['scores'];
function Score($nbrquest,$score){
    $total = $score / $nbrquest * 100;
    echo "Votre score est de : $total %";
}
Score($nbrquest,$score);
?>