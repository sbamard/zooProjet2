<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 12:28:48
  from '/Applications/MAMP/htdocs/zooDisii/intranet-06/mod_intervenant/vue/intervenantListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9af2802952c8_04634761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba8d2b46c346c39f29fc91d74c216fd7d92bf3b' => 
    array (
      0 => '/Applications/MAMP/htdocs/zooDisii/intranet-06/mod_intervenant/vue/intervenantListeVue.tpl',
      1 => 1587208338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9af2802952c8_04634761 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

        <link rel="icon" type="image/png" href="public/images/logo.PNG" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="row">
                <div class="col-md-4 space">
                    <a href="index.php?gestion=accueil"><img src="public/images/logo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="interv col-md-2 space">
                    <form action='index.php' method='post'>
                        <input type='hidden' name='gestion' value='intervenant'>
                        <input type='hidden' name='action' value='form_ajouter'>		
                        Ajouter un intervenant : 
                        <input type="submit"  class="btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                    </form>
                    <form action="mod_recherche/recherche.php" method="post" autocomplete="off">
                        <input id="searchBar" name="searchBar" class="searchBar form-control" type="text" placeholder="Recherchez un intervenant par son nom..." />
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

        <div class="row">
            <!-- ICI LES DONNES  -->
            <div class="col-md-offset-1 col-md-10 col-md-offset-1">
                <table class="table">
                    <thead class="">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                PRENOM
                            </th>
                            <th>
                                NOM
                            </th>

                            <th>
                                TELEPHONE
                            </th>
                            <th>
                                MAIL
                            </th>
                            <th>
                                FONCTION
                            </th>
                            <th>
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <p>INFORMATIONS : ... </p>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeIntervenants']->value, 'intervenant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['intervenant']->value) {
?>
                            <tr> 
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_ide'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_pre'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_nom'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_tel'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['intervenant']->value['int_mai'];?>

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
</body>
</html>
<?php }
}
