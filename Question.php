<?php
 $nomserv = 'localhost';
 $utinom = 'root';
 $servmdp = '';
 
 //Establish the connection
 $conn = new mysqli($nomserv, $utinom, $servmdp);
 
 //Checking the connection
 if($conn->connect_error){
     die('Erreur : ' .$conn->connect_error);
 }
 echo 'Connexion réussie';

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

class Administrateur extends Utilisateur{
    public function __construct($mail,$pseudo,$datenaissance,$mdp)
    {
        parent::__construct($mail,$pseudo,$datenaissance,$mdp);
    }
}

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
    $c1=readline("Donner un choix :");
    $c2 = readline("Donner le choix 2 :");
    $c3 = readline("Donner le choix 3 :");
    $c4=readline("Donner le choix4 :");
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