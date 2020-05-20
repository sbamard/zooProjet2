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
        <link href="public/css/sweetalert2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container-fluid ">
            {include file = 'public/menu.tpl'}
            <div class="row ">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=Accueil"><img src="public/images/logo.png" ></a>
                </div>
                <div class="col-md-6 space ">
                    <h3>{$titreGestion}</h3>
                </div>
                <div class="interv col-md-2 space">

                    {if $role eq 'Administrateur'}
                        <form action='index.php' method='post'>
                            <input type='hidden' name='gestion' value='intervenant'>
                            <input type='hidden' name='action' value='form_ajouter'>
                            Ajouter un intervenant :
                            <input type="submit"  class="ajouterEnclos btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                        </form>
                    {/if}
                    <form action="mod_recherche/recherche.php" method="post" autocomplete="off">
                        <input id="searchBar" name="searchBar" class="searchBar form-control" type="text" placeholder="Recherchez un intervenant..." />
                        <div id="result-search"/></div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-md-offset-1 ">
                <p {if $message neq ''} class='pos-message'{/if}>
                    {$message}
                </p>
            </div>

        </div>

        <div  class="row ">
            <!-- ICI LES DONNES  -->
            <div class='col-md-2'></div>
            <div id="tableau" class="col-md-offset-1 col-md-6 col-md-offset-1">
                <table class="table">
                    <thead class="">
                        <tr>

                            <th>
                                PRENOM
                            </th>
                            <th>
                                NOM
                            </th>
                            <th>
                                FONCTION
                            </th>
                            <th>
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$listeIntervenants item=intervenant}
                            <tr>

                                <td>
                                    {$intervenant.int_pre}
                                </td>
                                <td>
                                    {$intervenant.int_nom}
                                </td>
                                <td>
                                    {$intervenant.int_spe}
                                </td>
                                <td>
                                    <form action='index.php' method='post'>
                                        <input type='hidden' name='int_ide' value='{$intervenant.int_ide}'>
                                        <input type='hidden' name='gestion' value='intervenant'>
                                        <input type='hidden' name='action' value='form_consulter'>

                                        <input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
                                    </form>

                                    {if $role eq 'Administrateur'}

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='int_ide' value='{$intervenant.int_ide}'>
                                            <input type='hidden' name='gestion' value='intervenant'>
                                            <input type='hidden' name='action' value='form_modifier'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
                                        </form>

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='int_ide' value='{$intervenant.int_ide}'>
                                            <input type='hidden' name='gestion' value='intervenant'>
                                            <input type='hidden' name='action' value='form_supprimer'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
                                        </form>

                                    {/if}

                                </td>
                            </tr>
                        {foreachelse}
                            <tr>
                                <td colspan='6'>Aucun enregistrement de trouvé.</td>
                            </tr>
                        {/foreach}

                    </tbody>
                </table>
            </div>
            <div class='col-md-4'></div>
        </div>
        {include file = 'public/piedPage.tpl'}
    </div>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/scripts.js"></script>
    <script src="public/js/sweetalert2.all.min.js" type="text/javascript"></script>

    <script>
        function sweetalertclick(nomIntervenant) {
            Swal.fire(
                    'Ajouté !',
                    'Vous avez bien ajouté l\'intervenant !' + nomIntervenant,
                    'success',
                    );
        }
        if ({$Succes} == "1") {
            sweetalertclick("{$NomIntervenant}");
        }
    </script>
    <script>
        function sweetalertclick2(nomIntervenant) {
            Swal.fire(
                    'Modifié !',
                    'La fiche de l\'intervenant à bien été modifié !',
                    'success',
                    );
        }
        if ({$Succes} == "2") {
            sweetalertclick2("{$EditInt}");
        }
    </script>
    <script>
        function sweetalertclick3(nomIntervenant) {
            Swal.fire(
                    'Supprimé !',
                    'La fiche de l\'intervenant à bien été supprimé !',
                    'success',
                    );
        }
        if ({$Succes} == "3") {
            sweetalertclick3("{$DeleteInt}");
        }
    </script>

</body>
</html>
