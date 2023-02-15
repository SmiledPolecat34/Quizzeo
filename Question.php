<!-- <form action="Inscription.html" method="post"> -->
<!-- <form action="Connexion.html" method="post"> -->
<!-- <form action="creationQuizz.html" method="post"> -->
<form action="creationQuizzSuivant.html" method="post">
<?php
echo "Coucou";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "quizzeo");

 //Backup functions
 function sauvegarde($joueur) {
    $data = $joueur->getPseudo().",".$joueur->getMail().",".$joueur->getMotDePasse().",".$joueur->getDateDeNaissance()."," .$joueur->getRole()."\n";
    file_put_contents("save.txt",$data,FILE_APPEND);
}
class Utilisateur{
    private $mail;
    private $pseudo;
    private $datenaissance;
    private $motdepasse;
    public function __construct($mail,$pseudo,$datenaissance,$mdp){
        $this->mail=$mail;
        $this->pseudo = $pseudo;
        $this->datenaissance = $datenaissance;
        $this->motdepasse = $mdp;
    }
    public function setMail($mail){
        $this-> mail= $mail;
    }
    public function getMail(){
        return $this->mail;
    }
    public function setPseudo($pseudo){
        $this->pseudo= $pseudo;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function setDateNaissance($datenaissance){
        $this-> datenaissance= $datenaissance;
    }
    public function getDateNaissance(){
        return $this->datenaissance;
    }
    public function setQuestionID($mdp){
        $this-> motdepasse= $mdp;
    }
    public function getMotDePasse(){
        return $this->motdepasse;
    }
}
class Quizzer extends Utilisateur
{
    public function __construct($mail,$pseudo,$datenaissance,$mdp)
    {
        parent::__construct($mail,$pseudo,$datenaissance,$mdp);
    }
    //Re-set the questionnaire on a blank table
    function SupprimerQuestionnaire($questionnaire){
        print_r($questionnaire);
        $questionnaire = array();
        print_r($questionnaire);
    }
}

class Administrateur extends Quizzer{
    public function __construct($mail,$pseudo,$datenaissance,$mdp)
    {
        parent::__construct($mail,$pseudo,$datenaissance,$mdp);
    }
}
function CreerJoueur (){
    $choix = $_POST['case'];
    //var_dump($_POST[$choix]);
    $mail = $_POST['mail'];
    echo $mail;
    $pseudo = $_POST['pseudo'];
    $datenaissance = $_POST['dateDeNaissance'];
    $mdp = $_POST['mdp'];
    if($choix=="quizzeur"){
        $role = 2;
        echo ("2");
    }elseif($choix=="classique"){
        $role = 1;
        echo ("1");
    }
    if ($role==1){
        //$joueur = new Utilisateur($mail, $pseudo, $datenaissance, $mdp);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
    }else{
        //$joueur = new Utilisateur($mail, $pseudo, $datenaissance, $mdp);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $mysqli->query("INSERT INTO `quizzeo`.`utilisateur` (`pseudutilisateuro`, `email`, `motDePasse`, `role`) VALUES ('$pseudo', '$mail', '$mdp', '$role');");
    }
}

// if(isset($_POST['valider']))
// {
//     CreerJoueur();
// }

function Connexion (){
    $pseudoco = $_POST['pseudo1'];
    $mdpco = $_POST['mdp1'];
        //$joueur = new Utilisateur($mail, $pseudo, $datenaissance, $mdp);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $resultat=$mysqli->query("SELECT pseudutilisateuro, motDePasse FROM quizzeo.utilisateur where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");

        if (mysqli_num_rows($resultat) > 0) {
            // Affichage des données de chaque ligne
            while ($ligne = mysqli_fetch_assoc($resultat)) {
                echo " - nom : " . $ligne["pseudutilisateuro"]. " " . $ligne["motDePasse"];
            }
        } else {
            echo "0 résultats";
        }
    }
    
//Connexion();
$pseudoco="Tom";
$mdpco="jesuisquizzeur";
function NouveauQuizz($pseudoco,$mdpco){
    $nomQuizz = $_POST['nom_Quizz'];
    $nbrQuestion = $_POST['nb_question'];
    $niveauQuest=$_POST['niveau'];
    $categorieQuest=$_POST['categorie'];
    $dateCreation=date('y-m-d');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "quizzeo");
        $idUti=$mysqli->query("SELECT * FROM `quizzeo`.`utilisateur` where pseudutilisateuro='$pseudoco' AND motDePasse='$mdpco';");
        // $id_utilisateur = $idUti['Id_utilisateur'];
        $user = mysqli_fetch_array($idUti);
        $id_utilisateur = $user["Id_utilisateur"];
        $mysqli->query("INSERT INTO `quizzeo`.`quizz` (`titre`, `difficulte`, `date_creation`, `nbr_question`, `categorie`, `Id_utilisateur`) VALUES ('$nomQuizz', '$niveauQuest', '$dateCreation', '$nbrQuestion', '$categorieQuest','$id_utilisateur');");

}
//NouveauQuizz($pseudoco,$mdpco);
$nomQuizz="Testy";
$nbrQuestion=3;
$categorieQuest="hist_geo";
$dateCreation="2023-02-13";
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
        $mysqli->query("INSERT INTO `quizzeo`.`question` (`intituleQuestion`, `choix_1`, `choix_2`, `choix_3`, `choix_4`, `reponse`, `Id_quizz`) VALUES ('$intituleQuestion', '$choix_1', '$choix_2', '$choix_3', '$choix_4','$reponse', '$id_quizz');");
    }
 function Question($nomQuizz,$categorieQuest,$dateCreation){

    
        if(isset($_POST["question_suivante"])){
            NouvelleQuestion ($nomQuizz,$categorieQuest,$dateCreation);
            header("Location: http://localhost/Quizzeo/creationQuizzSuivant.html");
        }
        if(isset($_POST["stop_question"])){
            NouvelleQuestion ($nomQuizz,$categorieQuest,$dateCreation);
            header("Location: http://localhost/Quizzeo/Inscription.html");
        }  
        
}



Question($nomQuizz,$categorieQuest,$dateCreation);
// NouvelleQuestion($nomQuizz,$nbrQuestion,$categorieQuest,$dateCreation);
// function SupprimerQuestion ($nomQuizz,$nbrQuestion,$categorieQuest,$dateCreation){
//     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//     $mysqli = new mysqli("localhost", "root", "", "quizzeo");
//     $idQuizz=$mysqli->query("SELECT Id_quizz FROM `quizzeo`.`question` WHERE titre='$nomQuizz' AND nbr_question='$nbrQuestion' AND categorie='$categorieQuest' AND date_creation='$dateCreation';);");
//     $user = mysqli_fetch_array($idQuizz);
//     $id_quizz = $user["Id_quizz"];
//     $mysqli->query("DELETE FROM `quizzeo`.`question` WHERE Id_quizz=$id_quizz);");

// }
// SupprimerQuestion($nomQuizz,$nbrQuestion,$categorieQuest,$dateCreation);
//NouvelleQuestion($nomQuizz,$nbrQuestion,$categorieQuest,$dateCreation);
//Creating a question class
class Question {
    //The variables are in private because they are not called outside the class and it allows a better security than public
    private $reponse;
    private $choix1;
    private $choix2;
    private $choix3;
    private $choix4;
    private $questionID;
    private $question;
    //constructor to define the basic pattern 
    public function __construct($qID,$q,$r,$c1,$c2,$c3,$c4){
        $this->questionID=$qID;
        $this->reponse = $r;
        $this->choix1 = $c1;
        $this->choix2 = $c2;
        $this->choix3 = $c3;
        $this->choix4 = $c4;
        $this->question = $q;
    }
    //Functions are in public as they will be called out of class
    public function setQuestionID($questionID){
        $this-> questionID= $questionID;
    }
    public function getQuestionID(){
        return $this->questionID;
    }
    public function setQuestion($question){
        $this-> question= $question;
    }
    public function getQuestion(){
        return $this->question;
    }
    public function setReponse($reponse){
        $this->reponse = $reponse;
    }
    public function getReponse(){
        return $this->reponse;
    }
    public function setChoix1($choix1){
        $this->choix1 = $choix1;
    }
    public function getChoix1(){
        return $this->choix1;
    }
    public function setChoix2($choix2){
        $this->choix2 = $choix2;
    }
    public function getChoix2(){
        return $this->choix2;
    }
    public function setChoix3($choix3){
        $this->choix3 = $choix3;
    }
    public function getChoix3(){
        return $this->choix3;
    }
    public function setChoix4($choix4){
        $this->choix1 = $choix4;
    }
    public function getChoix4(){
        return $this->choix4;
    }
    //This function will compare the player’s selected choice with the correct answer. 
    public function verificationReponse($reponse,$choix){
        //If the answer is true it will increase the score by 1 and indicate a success message
        if ($reponse==$choix){
            echo ("Bravo vous avez trouvé la bonne réponse");
            $score+=1;
        //Otherwise the error message is displayed.  
        }else{
            echo ("Vous n'avez pas trouvé la bonne réponse, vous auriez dû répondre : $choix");
        }
    }
}
//Function to create a question 
function CreerQuestion(){
    $qID = 1;
    $q = readline("Quel est votre question ? :");
    $r = readline("Quel est la réponse à votre question ? :");
    $c1= readline("Donner un choix :");
    $c2 = readline("Donner le choix 2 :");
    $c3 = readline("Donner le choix 3 :");
    $c4= readline("Donner le choix 4 :");
    //Check that the player has entered the answer among the choices
    if ($r==$c1 or $r==$c2 or $r==$c3 or $r==$c4){
        echo ("Votre question a bien été ajoutée");
    }else{
        CreerQuestion();
    }
    $qst = new Question($qID,$q,$r,$c1,$c2,$c3,$c4);
    return $qst;
}
//Create a new questionnaire
function CreerQuestionnaire(){
    $nbqst=readline("Combien de questions voulez-vous mettre dans votre questionnaires ?");
    $questionnaire= array();
    for($i=0;$i<$nbqst;$i++){
        $question=readline("Veuillez entrer votre question :");
        array_push($questionnaire,$question);
    }
    print_r($questionnaire);
}

//Calculating the player’s percentage score
function Score($nbrquest,$score){
    $total = $score / $nbrquest * 100;
    echo "Votre score est de : $total %";
}