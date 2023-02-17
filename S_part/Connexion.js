class Alerte{
    constructor(){
        this.pseudo_conn = document.getElementById("pseudo");
        this.mdp_conn = document.getElementById("mdp");
        this.connexion = document.querySelector(".connexion");

        this.activerAlertes();
    }

    alert_conn(){
        if (this.pseudo_conn.value == "" || this.mdp_conn.value == ""){
            alert("Vous n'avez pas rempli tous les champs !");
            event.preventDefault();
        }
    }
    
    activerAlertes(){
        console.log("bouton connexion");
        this.connexion.addEventListener("click",()=>{
            console.log("connexion click");
            this.alert_conn();
        })
    }
}

let alerte = new Alerte();