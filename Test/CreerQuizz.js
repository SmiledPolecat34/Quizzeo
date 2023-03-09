class Alerte{
    constructor(){
        this.nom_quizz = document.getElementById("nom_Quizz");
        this.nb_question = document.getElementById("nb_question");
        this.suivant = document.querySelector(".suivant");

        this.activerAlertes();
    }

    alert(){
        if (this.nom_quizz.value == "" || this.nb_question.value == ""){
            alert("Vous n'avez pas rempli tous les champs !");
        }
    }

    activerAlertes(){
        console.log("bouton suivant");
        this.suivant.addEventListener("click",()=>{
            console.log("suivant click");
            this.alert();
            event.preventDefault();
        })
    }
}

let alerte = new Alerte();
