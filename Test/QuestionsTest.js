//Sorry for the french variables,
//We have to use french variables
//To facilitate the understanding of the code

//Define tests for data questions
//4 questions to begin
//Each question has 4 answers
//Only one answer is correct
//The correct answer is defined by the attribute "correct"
//The value of the attribute "correct" is the id of the correct answer
//The id of the answer is the first letter of the answer
const quizData = [
    {
        question: "Quel âge a Franklin ?",
        a: "18 ans",
        b: "19 ans",
        c: "20 ans",
        d: "21 ans",
        correct: "b",
    },
    {
        question: "Quel âge a Morgane ?",
        a: "18 ans",
        b: "19 ans",
        c: "20 ans",
        d: "21 ans",
        correct: "c",
    },
    {
        question: "Quel âge a Sophie ?",
        a: "18 ans",
        b: "19 ans",
        c: "20 ans",
        d: "21 ans",
        correct: "a",
    },
    {
        question: "Comment s'écrit mon prénom ?",
        a: "Franklin",
        b: "Francklin",
        c: "Franclin",
        d: "Frankclin",
        correct: "a",
    },
];
//Define variables
//Recuperation of the HTML elements
//with the id "quiz", "question" and "submit"
const quiz=document.getElementById("quiz");
const questionEl=document.getElementById("question");
const boutonEnregistrer=document.getElementById("submit");
//and the class "reponse"
//for the querySelectorAll method
const reponseEls=document.querySelectorAll(".reponse");
//Recuperation of the id of answers' radio buttons
const a_text=document.getElementById("a_text");
const b_text=document.getElementById("b_text");
const c_text=document.getElementById("c_text");
const d_text=document.getElementById("d_text");
//Define current quiz and score of the user
let quizActuel=0;
let score=0;

//Call the function to load the quiz
chargerQuiz();

//Define the function to load the quiz
function chargerQuiz(){
    //Call the function to deselect the answers
    deselectionReponses();
    //Recuperation of the data of the current question
    //Defined in the array quizData
    const quizActuelData=quizData[quizActuel
    ];
    //Display the question
    questionEl.innerText=quizActuelData.question;
    //Display the answers
    a_text.innerText=quizActuelData.a;
    b_text.innerText=quizActuelData.b;
    c_text.innerText=quizActuelData.c;
    d_text.innerText=quizActuelData.d;
};
//Define the function to deselect the answers
function deselectionReponses(){
    //For each answer, the checked attribute is set to false
    reponseEls.forEach((reponseEl) => reponseEl.checked = false);
};

//Define the function to get the answer selected by the user
function avoirSelectionne(){
    //Define the variable to store the answer
    let reponse;
    //For each answer, if the checked attribute is true
    reponseEls.forEach(reponseEl => {
        //The variable "reponse" is set to the id of the answer
        if(reponseEl.checked){
            reponse=reponseEl.id;
        }
    });
    //Return the answer
    return reponse;
};
//Define the event for the constant "boutonEnregistrer" to store the score
boutonEnregistrer.addEventListener("click", () => {
    //Calculate the score and the percentage of good answers
    const pourcentage = score*quizData.length/100;
    //Call the function to get the answer selected by the user
    const reponse=avoirSelectionne();
    //If the user has selected an answer
    if(reponse){
        //If the answer is correct
        if(reponse === quizData[quizActuel].correct){
            //Add 1 to the score
            score++;
        }
        //Add 1 to the current question
        quizActuel++;
        //If the current question is less than the number of questions
        if(quizActuel < quizData.length){
            //Call the function to load the quiz
            chargerQuiz();
            //If the current question is equal to the number of questions
        }else{
            //Display the score and the percentage of good answers
            quiz.innerHTML = `<h2>Tu as un score final de ${score}/${quizData.length}, pour ${pourcentage}% de réponse(s) bonne(s) !</h2>

            <button onclick="location.reload()">Reload</button>`;
        }
    }
});