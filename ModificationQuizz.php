<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_Quizz</title>
    <link rel="stylesheet" href="modificationQuizz.css">
</head>
<body>
    <header class="title">
        <h1>Quizzeo</h1>
    </header>
    <div class="organisation">
        <form action="modificationQuizz.php">
        
            <div id="nom_Quizz" class="Crea">
                <p>
                    <label for="nom_Quizz">
                    Nom du quizz:
                    </label>
                    <br />
                    <label for="nom_Quizz">
                        Entrez un nom pour le Quizz :
                    </label>
                    <input id="nom_Quizz" class="case" type="text" name="nom_Quizz" placeholder="Nom du quizz"/>
                </p>
            </div>
            <input type="submit" name="modifier_nomquizz" value="Modifier le nom" class="submitconnexion">     
            
            <div id="niveau" class="Crea">
                <p>
                    <label for="niveau">
                        Difficulté du quizz :
                    </label>
                    <br>
                    <label for="niveau">
                        Choississez le niveau de difficulté du quizz :
                    </label>
                    <select  class="case" name="niveau" id="niveau">
                        <option value= "débutant">Débutant</option>
                        <option value= "facile">Facile</option>
                        <option value= "intermédiaire">Intermédiaire</option>
                        <option value= "difficile">Difficile</option>
                        <option value= "expert">Expert</option>
                    </select>
                </p>
            </div>
            <input type="submit" name="modifier_niveauquizz" value="Modifier le niveau" class="submitconnexion">
        
            <div id="categorie" class="Crea">
                <p>
                    <label for="categorie">
                        Choisissez la catégorie de votre quizz :
                    </label>
                    <select class="case" name= "categorie" id="categorie">
                        <option value= "sport">Sport</option>
                        <option value= "musique">Musique</option>
                        <option value= "cinema">Cinéma</option>
                        <option value= "culture_generale">Culture Generale</option>
                        <option value= "hist_geo">Histoire-géographie</option>
                    </select>
                </p>
            </div>
            <input type="submit" name="modifier_categoriequizz" value="Modifier la catégorie" class="submitconnexion">

            <div id="nom_Question" class="Crea">
                <p>
                    <label for="nom_Question">
                        Entrez le titre de la réponse à modifier :
                    </label>
                    <input id="nom_Question" class="case" type="text" name="nom_Question" placeholder="Nom de la question"/>
                </p>
            </div>
            
            <br>
            <input type="submit" name="modifier" value="Modifier la question" class="submitconnexion">
            <input type="submit" name="suppr" value="Supprimer la question" class="submitconnexion">
            <input type="submit" name="supprimer" value="Supprimer le Quizz" class="submit-supprimer">
            <input id="retour2" type="submit"  name="retour" value="Retour" class="submit-retour" onclick="history.go(-1)">
    </form>
    </div>
    <script src="CreerQuizz.js"></script> 
</body>
</html>