class Alerte{
    constructor(){
        this.pseudo_insc = document.getElementById("pseudo");
        this.mail_insc = document.getElementById("mail");
        this.date_naissance_insc = document.getElementById("dateDeNaissance");
        this.mdp_insc = document.getElementById("mdp");
        this.valider = document.querySelector(".valider");

        this.activerAlertes();
    }

    alert_insc(){
        if (this.pseudo_insc.value == "" || this.mdp_insc.value == ""|| this.mail_insc.value == ""|| this.date_naissance_insc.value == ""){
            alert("Vous n'avez pas rempli tous les champs !");
        }
    }

    activerAlertes(){
        console.log("bouton valider");
        this.valider.addEventListener("click",()=>{
            console.log("valider click");
            this.alert_insc();
            event.preventDefault();
        })
    }
}

let alerte = new Alerte();