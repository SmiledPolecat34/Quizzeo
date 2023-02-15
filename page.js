class Utilisateur{
    constructor(){
        this.profil = document.getElementById("profil")
        this.quizz = document.getElementById("quizz")
        this.deconnexion = document.getElementById("deconnexion")
        this.creer = document.getElementById("creer")
    }
    clickButton(){
        // console.log('this.profil : ', this.profil)
        this.profil.addEventListener("click",()=>{
            console.log("profil clicked")
        })
        this.creer.addEventListener("click",()=>{
            if (id_utilisateur == 1){
                alert ("Vous n'avez pas les droits.");
                event.preventDefault();
            }
            console.log("creer clicked")
        })
        this.quizz.addEventListener("click",()=>{
            console.log("quizz clicked")
        })
        this.deconnexion.addEventListener("click",()=>{
            console.log("deconnexion clicked")
        })
    }
}

// class Quizzer extends Utilisateur{
//     constructor(){
//         this.mes_quizz = document.getElementById("mes_Quizz")
//     }
//     clickButton2(){
//         this.mes_quizz.addEventListener("click",()=>{
//             console.log("mes_quizz clicked")
//         })
//     }
// }

let utilisateur = new Utilisateur()
utilisateur.clickButton();

