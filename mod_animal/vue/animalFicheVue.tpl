<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{$titre|upper}</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet"> 

        <link rel="icon" type="image/png" href="public/images/plogo.png" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">
            {include file ='public/menu.tpl'}
            <div class="row">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=Animal"><img src="public/images/logo.png" ></a>
                </div>
                <div id="unAnimal" class="col-md-4 space text-center">
                    <h3>{$unAnimal->getAni_pre()}</h3>
                </div>
                <div class="col-md-4 space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p {if $unAnimal->getMessageErreur() neq ''} class="pos-messageErreur" {/if}>
                        {$unAnimal->getMessageErreur()}
                    </p>
                </div>
            </div>

            <div class="col-md-4"></div>

            <div class="row">
                <div class="col-md-4">
                    <img class="align-content-center" id="photoAnimal" src="{$unAnimal->getAni_pix()}" alt='photo' >
                </div>
            </div>

            {if $action neq 'consulter'}
                <div class="row" id='ficheAnimal'>
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div id="tableau" class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                        <form action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="animal">
                            <input type="hidden" name="action" value="{$action}">



                            {if $action neq 'ajouter'}
                                <div class="form-group">
                                    Identifiant : 
                                    <input class="form-control" id="ani_ide" name="ani_ide" type="text" value="{$unAnimal->getAni_ide()}" readonly>
                                </div>
                            {/if}

                            <div class="form-group">
                                Nom {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <strong>    
                                    <input class="form-control" id="ani_pre" name="ani_pre" type="text" value="{$unAnimal->getAni_pre()}"  {$comportement} required="required">
                                </strong>
                            </div>
                            <div class="form-group">
                                Race {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <input class="form-control" id="ani_rac" name="ani_rac" type="text" value="{$unAnimal->getAni_rac()}" {$comportement}>
                            </div>
                            <div class="form-group">
                                Genre {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <input class="form-control" id="ani_sex" name="ani_sex" type="text" value="{$unAnimal->getAni_sex()}" {$comportement}>
                            </div>

                            <div class="form-group">
                                Date de Naissance {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <input class="form-control" id="ani_nai" name="ani_nai" type="text" value="{$unAnimal->getAni_nai()}" {$comportement}>
                            </div>

                            <div class="form-group">
                                Quelques mots sur moi.. {if $action eq 'ajouter'}<sup>(*)</sup>:{/if}
                                <input class="form-control" id="ani_tex" name="ani_tex" type="text" value="{$unAnimal->getAni_tex()}" {$comportement}>
                            </div>
                            <div class="form-group">
                                <div  class="col-md-1 btn btn-outline-primary ">
                                    <a id="boutonJS" href="javascript:history.go(-1)">Retour</a>
                                </div>
                                {if $action neq 'consulter'}
                                    <div class="col-md-1">
                                        <input id="boutonJS" type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
                                    </div>
                                {/if}
                            </div>
                        </form>
                    </div>
                </div>
            {/if}

            {if $action eq 'consulter'}
                <div class="row" id='ficheAnimal'>
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div class="col-md-4"></div>
                    <div id="tableau" class="col-md-4">
                        <table action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="animal">
                            <input type="hidden" name="action" value="{$action}">


                            <tr>
                                <th class="table-titre">N° d'identifiant :</th>
                                <td><input class="table-valeur" id="ani_ide" name="ani_ide" type="text" value="{$unAnimal->getAni_ide()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Nom :</th>
                                <td><input class="table-valeur" id="ani_pre" name="ani_pre" type="text" value="{$unAnimal->getAni_pre()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Race :</th>
                                <td><input class="table-valeur" id="ani_rac" name="ani_rac" type="text" value="{$unAnimal->getAni_rac()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Genre :</th>
                                <td><input class="table-valeur" id="ani_sex" name="ani_sex" type="text" value="{$unAnimal->getAni_sex()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Date de naissance :</th>
                                <td><input class="table-valeur" id="ani_nai" name="ani_nai" type="text" value="{$unAnimal->getAni_nai()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Quelques mots sur moi..</th>
                                <td><textarea value="{$unAnimal->getAni_tex()}" id="story" name="story" rows="5" cols="33"></textarea></td>
                            </tr>
                            <tr>
                                <td><a href="javascript:history.go(-1)" type="submit" class="btn btn-warning btn-sm">Retour</a></td>
                            </tr>
                        </table>

                    </div>
                               <div class="col-md-4"></div>
                </div>
            {/if}
        </div>

        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/scripts.js"></script>
    </body>
</html>