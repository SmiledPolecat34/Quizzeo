const quizData= parseInt(document.getElementById('variable a passer').innerText)+1;
document.getElementById('variable a passer').innerText="";
const quiz=document.getElementById("quiz");
const reponseEls=document.querySelectorAll(".reponse");
const questionEl=document.getElementById("question");
const a_text=document.getElementById("a_text");
const b_text=document.getElementById("b_text");
const c_text=document.getElementById("c_text");
const d_text=document.getElementById("d_text");
const submtBtn=document.getElementById("submit");

let currentQuiz=0;
let score=0;
const a=document.getElementById('a')
a.innerHTML="4";

loadQuiz();

function loadQuiz(){
    deselectreponses();
    const currentQuizData=quizData[currentQuiz
    ];

    questionEl.innerText=currentQuizData.question;

    a_text.innerText=currentQuizData.a;
    b_text.innerText=currentQuizData.b;
    c_text.innerText=currentQuizData.c;
    d_text.innerText=currentQuizData.d;
};

function deselectreponses(){
    reponseEls.forEach((reponseEl) => reponseEl.checked = false);
};


function getSelected(){
    let reponse;

    reponseEls.forEach(reponseEl => {
        if(reponseEl.checked){
            reponse=reponseEl.id;
        }
    });
    return reponse;
};

submtBtn.addEventListener("click", () => {
    const pourcentage = score*quizData.length/100;
    const reponse=getSelected();
    if(reponse){
        if(reponse === quizData[currentQuiz].correct){
            score++;
        }
        currentQuiz++;
        if(currentQuiz < quizData.length){
            loadQuiz();
        }else{
            quiz.innerHTML = `<h2>Tu as un score final de ${score}/${quizData.length}, pour ${pourcentage}% de réponse(s) bonne(s) !</h2>

            <button onclick="location.reload()">Reload</button>`;
        }
    }
});