class Utilisateur{
    constructor(){
        // this.profil = document.getElementById("profil")
        this.quizz = document.getElementById("quizz")
        // this.deconnexion = document.getElementById("deconnexion")
        this.gestionUtili = document.getElementById("gestionUtili")
        // this.creer = document.getElementById("creer")
        role=parseInt(document.getElementById('role').innerText)+1;
        
    }
    clickButton(){
        // console.log('this.profil : ', this.profil)
        this.creer.addEventListener("click",()=>{
            if (role == 1){
                alert ("Vous n'avez pas les droits.");
                event.preventDefault();
            }
            console.log("creer clicked")
        })
        this.gestionUtili.addEventListener("click",()=>{
            if (role == 1 || role == 2){
                alert ("Vous n'avez pas les droits.");
                event.preventDefault();
            }
            console.log("gestionUtili clicked")
        })
    }
}



let utilisateur = new Utilisateur()
utilisateur.clickButton();

