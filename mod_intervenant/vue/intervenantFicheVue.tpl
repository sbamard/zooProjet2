<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{$titre|upper}</title>

        <link rel="icon" type="image/png" href="public/images/plogo.png" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">
            {include file ='public/menu.tpl'}
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php?gestion=Intervenant"><img src="public/images/logo.png" ></a>
                </div>
                <div class="col-md-6 space text-center">
                    <h3>{$titreGestion}</h3>
                </div>
                <div class="col-md-3 space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p {if $unIntervenant->getMessageErreur() neq ''} class="pos-messageErreur" {/if}>
                        {$unIntervenant->getMessageErreur()}
                    </p>
                </div>
            </div>	

            {if $action neq 'consulter'}      
                <div class="row">
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                        <form action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="intervenant">
                            <input type="hidden" name="action" value="{$action}">
                            <input type="hidden" id="int_mpa" name="int_mpa" value="">   
                            {if $action neq 'ajouter'}
                                <div class="form-group">
                                    Identifiant : 
                                    <input class="form-control" id="int_ide" name="int_ide" type="text" value="{$unIntervenant->getInt_ide()}" readonly>
                                </div>
                            {/if}
                            <div class="form-group">
                                Prénom {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <strong>    
                                    <input class="form-control" id="int_pre" name="int_pre" type="text" value="{$unIntervenant->getInt_pre()}"  {$comportement} required="required">
                                </strong>
                            </div>

                            <div class="form-group">
                                Nom {if $action eq 'ajouter'}<sup>(*)</sup>{/if} :
                                <input class="form-control" id="int_nom" name="int_nom" type="text" value="{$unIntervenant->getInt_nom()}" {$comportement} required="required">
                            </div>

                            <div class="form-group">
                                Téléphone :
                                <input class="form-control" id="int_tel" name="int_tel" type="text" value="{$unIntervenant->getInt_tel()}"  {$comportement}>
                            </div>
                            <div class="form-group">
                                Mail :
                                <input class="form-control" id="int_mai"  name="int_mai" type="text" value="{$unIntervenant->getInt_mai()}"  {$comportement}>
                            </div>
                            <div class="form-group">
                                Niveau :
                                <input class="form-control" id="int_spe" name="int_spe" type="text" value="{$unIntervenant->getInt_spe()}"  {$comportement}>
                            </div>
                            {if $action eq 'ajouter'}
                                <div class="form-group">
                                    Login :
                                    <input class="form-control" id="int_log"  name="int_log" type="text" value="{$unIntervenant->getInt_log()}"   {$comportement} required="required">
                                </div>


                                <div class="form-group">
                                    Mot de passe :
                                    <input class="form-control" id="int_mpa"  name="int_mpa" type="text" value="{$unIntervenant->getInt_mpa()}"   {$comportement} required="required">
                                </div>
                            {/if}

                            <div class="form-group">
                                <div class="col-md-11">
                                    <input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=Intervenant"' value="Retour">
                                </div>
                                {if $action neq 'consulter'}
                                    <div class="col-md-1">
                                        <input type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
                                    </div>
                                {/if}
                            </div>
                        </form>
                    </div>
                </div>
            {/if}   

            {if $action eq 'consulter'}

                <div class="row">
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    
                    <div class="col-md-5"></div>
                    <div id="ficheIntervenant" class="col-md-2">
                        <table action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="intervenant">
                            <input type="hidden" name="action" value="{$action}">
                            <input type="hidden" id="int_mpa" name="int_mpa" value="">   


                            <tr>
                                <th class="table-titre">N° d'identifiant : </th>
                                <td><input class="table-valeur" id="int_ide" name="int_ide" type="text" value="{$unIntervenant->getInt_ide()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Prénom :</th>
                                <td><input class="table-valeur" id="int_pre" name="int_pre" type="text" value="{$unIntervenant->getInt_pre()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Nom :</th>
                                <td><input class="table-valeur" id="int_nom" name="int_nom" type="text" value="{$unIntervenant->getInt_nom()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Téléphone :</th>
                                <td><input class="table-valeur" id="int_tel" name="int_tel" type="text" value="{$unIntervenant->getInt_tel()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Mail :</th>
                                <td><input class="table-valeur" id="int_mai"  name="int_mai" type="text" value="{$unIntervenant->getInt_mai()}"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Niveau :</th>
                                <td><input class="table-valeur" id="int_spe" name="int_spe" type="text" value="{$unIntervenant->getInt_spe()}"></td>
                            </tr>
                            <tr>
                                <td><input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=Intervenant"' value="Retour"></td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-5"></div>
                </div>


            {/if}

            {include file='public/piedPage.tpl'}
        </div>

        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/scripts.js"></script>
    </body>
</html>