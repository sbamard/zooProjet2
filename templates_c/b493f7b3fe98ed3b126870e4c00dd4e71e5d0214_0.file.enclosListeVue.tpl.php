<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 22:29:29
  from '/Applications/MAMP/htdocs/zooDisii/intranet-08/mod_enclos/vue/enclosListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b7f49e64e73_46087271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b493f7b3fe98ed3b126870e4c00dd4e71e5d0214' => 
    array (
      0 => '/Applications/MAMP/htdocs/zooDisii/intranet-08/mod_enclos/vue/enclosListeVue.tpl',
      1 => 1587248963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9b7f49e64e73_46087271 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet"> 

        <link rel="icon" type="image/png" href="public/images/plogo.PNG" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">

            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="row">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=accueil"><img src="public/images/logo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="col-md-2 space">
                    
                    <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Moderateur') {?>
                    <form action='index.php' method='post'>
                        <input type='hidden' name='gestion' value='enclos'>
                        <input type='hidden' name='action' value='form_ajouter'>		
                        Ajouter un enclos : 
                        <input type="submit"  class="btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                    </form>
                    <?php }?>
                    
                    <form action="../mod_recherche/rechercheAnimal.php" method="post" autocomplete="off">
                        <input id="searchBar" name="searchBar" class="searchBar form-control" type="text" placeholder="Recherchez un animal..." />
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
            <div class='col-md-2'></div>
            <div id="tableau" class="col-md-offset-1 col-md-5 col-md-offset-1">
                <table class="table">
                    <thead class="">
                        <tr>
                            <th>
                                NOM
                            </th>
                            <th>
                                RACE
                            </th>
                            <th>
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEnclos']->value, 'enclos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['enclos']->value) {
?>
                            <tr> 
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['enclos']->value['enc_nom'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['enclos']->value['ani_rac'];?>

                                </td>                                     
                                <td>
                                    <form action='index.php' method='post'>
                                        <input type='hidden' name='ani_rac' value='<?php echo $_smarty_tpl->tpl_vars['enclos']->value['ani_rac'];?>
'>
                                        <input type='hidden' name='gestion' value='animal'>
                                        
                                        <input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
                                    </form>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Moderateur') {?>

                                    <form action='index.php' method='post'>
                                        <input type='hidden' name='enc_ide' value='<?php echo $_smarty_tpl->tpl_vars['enclos']->value['enc_ide'];?>
'>
                                        <input type='hidden' name='gestion' value='enclos'>
                                        <input type='hidden' name='action' value='form_modifier'>

                                        <input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">                                                  
                                    </form>

                                    <form action='index.php' method='post'>
                                        <input type='hidden' name='enc_ide' value='<?php echo $_smarty_tpl->tpl_vars['enclos']->value['enc_ide'];?>
'>
                                        <input type='hidden' name='gestion' value='enclos'>
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
            <div class='col-md-5'></div>
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
 src="public/js/scriptsAnimal.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
