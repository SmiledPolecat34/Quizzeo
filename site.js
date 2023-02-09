class Alerte{
    constructor(){
        this.pseudo_conn = document.getElementById("pseudo");
        this.mdp_conn = document.getElementById("mdp");
        this.connexion = document.getElementById("connexion");
        this.activerAlertes();
    }

    alert(){
        if (this.pseudo_conn.value == ""){
            alert("Vous n'avez pas rempli tous les champs !");
        }
    }

    activerAlertes(){
        this.connexion.addEventListener("click",()=>{
            console.log("connexion clicked");
            this.alert();
        })
    }
}

let alerte = new Alerte();
