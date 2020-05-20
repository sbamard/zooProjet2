<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titre|upper}</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet"> 
        <link rel="icon" type="image/png" href="public/images/logo.png" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid ">
            {include file = 'public/menu.tpl'}
            <div class="row ">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=Accueil"><img src="public/images/logo.png" ></a>
                </div>
                <div class="col-md-6 space ">
                    <h3>Formulaire de contact</h3>
                </div>
                <div class="interv col-md-2 space">
                </div>
            </div>
            <div class="row ">
                <!-- ICI LES DONNES  -->
                <div class='col-md-3'></div>
                <div id="formulaire"  class="col-md-6"> 
                    <form>
                        <div class="form-group">
                            <label for="selection1">Mail :</label>
                            <input tupe="text" id="mail-util" class="form-control" id="exampleFormControlSelect1" placeholder="Veuillez saisir l'adresse mail du destinataire">
                        </div>
                        <div class="form-group">
                            <label for="selection2">Votre message concerne :</label>
                            <select id="mail-obj" class="form-control" id="exampleFormControlSelect2">
                                <option value="soins">Les soins</option>
                                <option value="nourritures">La nourriture</option>
                                <option value="parcelles">Les parcelles</option>
                                <option value="autre">Autre sujet</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Zone de texte</label>
                            <textarea class="form-control" id="body-msg" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="selection1">Signature</label>
                            <input tupe="text" id="mail-util" class="form-control" id="exampleFormControlSelect1" placeholder="Merci de renseigner votre nom">
                        </div>
                        <input class="btn" type="submit" value="Envoyer" />
                    </form>
                </div>
                <div class='col-md-3'></div>
            </div>
        </div>
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/scripts.js"></script>
    </body>
</html>
