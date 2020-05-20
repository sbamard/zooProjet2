<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 22:00:59
  from '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_intervenant/vue/intervenantListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9cca1bb23f27_62998851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddb448cb59102970ad29e127fceb5ef41ec42e9' => 
    array (
      0 => '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_intervenant/vue/intervenantListeVue.tpl',
      1 => 1587333198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9cca1bb23f27_62998851 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/images/logo.png" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
        <link href="public/css/sweetalert2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container-fluid ">
            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="row ">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=Accueil"><img src="public/images/logo.png" ></a>
                </div>
                <div class="col-md-6 space ">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="interv col-md-2 space">

                    <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Administrateur') {?>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='gestion' value='intervenant'>
                            <input type='hidden' name='action' value='form_ajouter'>
                            Ajouter un intervenant :
                            <input type="submit"  class="ajouterEnclos btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                        </form>
                    <?php }?>
                    <form action="mod_recherche/recherche.php" method="post" autocomplete="off">
                        <input id="searchBar" name="searchBar" class="searchBar form-control" type="text" placeholder="Recherchez un intervenant..." />
                        <div id="result-search"/></div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-md-offset-1 ">
                <p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class='pos-message'<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeIntervenants']->value, 'intervenant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['intervenant']->value) {
?>
                            <tr>

                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_pre'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_nom'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_spe'];?>

                                </td>
                                <td>
                                    <form action='index.php' method='post'>
                                        <input type='hidden' name='int_ide' value='<?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_ide'];?>
'>
                                        <input type='hidden' name='gestion' value='intervenant'>
                                        <input type='hidden' name='action' value='form_consulter'>

                                        <input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
                                    </form>

                                    <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Administrateur') {?>

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='int_ide' value='<?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='intervenant'>
                                            <input type='hidden' name='action' value='form_modifier'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
                                        </form>

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='int_ide' value='<?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='intervenant'>
                                            <input type='hidden' name='action' value='form_supprimer'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
                                        </form>

                                    <?php }?>

                                </td>
                            </tr>
                        <?php
}
} else {
?>
                            <tr>
                                <td colspan='6'>Aucun enregistrement de trouvé.</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>
            </div>
            <div class='col-md-4'></div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:public/piedPage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <?php echo '<script'; ?>
 src="public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/sweetalert2.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        function sweetalertclick(nomIntervenant) {
            Swal.fire(
                    'Ajouté !',
                    'Vous avez bien ajouté l\'intervenant !' + nomIntervenant,
                    'success',
                    );
        }
        if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "1") {
            sweetalertclick("<?php echo $_smarty_tpl->tpl_vars['NomIntervenant']->value;?>
");
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function sweetalertclick2(nomIntervenant) {
            Swal.fire(
                    'Modifié !',
                    'La fiche de l\'intervenant à bien été modifié !',
                    'success',
                    );
        }
        if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "2") {
            sweetalertclick2("<?php echo $_smarty_tpl->tpl_vars['EditInt']->value;?>
");
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function sweetalertclick3(nomIntervenant) {
            Swal.fire(
                    'Supprimé !',
                    'La fiche de l\'intervenant à bien été supprimé !',
                    'success',
                    );
        }
        if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "3") {
            sweetalertclick3("<?php echo $_smarty_tpl->tpl_vars['DeleteInt']->value;?>
");
        }
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
