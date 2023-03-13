<?php
session_start();
$aa=$_SESSION['aa'];
echo $aa;
$nbrquest=$_SESSION['nbrquest'];
$score=$_SESSION['score'];
function Score($nbrquest,$score){
    $total = $score / $nbrquest * 100;
    echo "Votre score est de : $total %";
}
    echo 'Reussite !';
    echo ""
?>
<script src="QuestionsTest.js"></script>
