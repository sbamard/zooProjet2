<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 18:23:07
  from 'C:\xampp\htdocs\intranet-03\mod_intervenant\vue\intervenantFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c7aebe89a25_75372636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d8d0402e190d750ed7ab17060de48aa8481208' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\mod_intervenant\\vue\\intervenantFicheVue.tpl',
      1 => 1587312721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9c7aebe89a25_75372636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\intranet-03\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

        <link rel="icon" type="image/png" href="public/images/plogo.PNG" />
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">
            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php?gestion=intervenant"><img src="public/images/logo.PNG" ></a>
                </div>
                <div class="col-md-6 space text-center">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="col-md-3 space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p <?php if ($_smarty_tpl->tpl_vars['unIntervenant']->value->getMessageErreur() != '') {?> class="pos-messageErreur" <?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getMessageErreur();?>

                    </p>
                </div>
            </div>	

            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>      
                <div class="row">
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                        <form action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="intervenant">
                            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                            <input type="hidden" id="int_mpa" name="int_mpa" value="">   
                            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                <div class="form-group">
                                    Identifiant : 
                                    <input class="form-control" id="int_ide" name="int_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_ide();?>
" readonly>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                Prénom <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <strong>    
                                    <input class="form-control" id="int_pre" name="int_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_pre();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                </strong>
                            </div>

                            <div class="form-group">
                                Nom <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <input class="form-control" id="int_nom" name="int_nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                            </div>

                            <div class="form-group">
                                Téléphone :
                                <input class="form-control" id="int_tel" name="int_tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_tel();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                            <div class="form-group">
                                Mail :
                                <input class="form-control" id="int_mai"  name="int_mai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_mai();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                            <div class="form-group">
                                Niveau :
                                <input class="form-control" id="int_spe" name="int_spe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_spe();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?>
                                <div class="form-group">
                                    Login :
                                    <input class="form-control" id="int_log"  name="int_log" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_log();?>
"   <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                </div>


                                <div class="form-group">
                                    Mot de passe :
                                    <input class="form-control" id="int_mpa"  name="int_mpa" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_mpa();?>
"   <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                </div>
                            <?php }?>

                            <div class="form-group">
                                <div class="col-md-11">
                                    <input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=intervenant"' value="Retour">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                    <div class="col-md-1">
                                        <input type="submit" class="btn btn-warning btn-sm" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                    </div>
                                <?php }?>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>   

            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'consulter') {?>

                <div class="row">
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    
                    <div class="col-md-5"></div>
                    <div id="ficheIntervenant" class="col-md-2">
                        <table action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="intervenant">
                            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                            <input type="hidden" id="int_mpa" name="int_mpa" value="">   


                            <tr>
                                <th class="table-titre">N° d'identifiant : </th>
                                <td><input class="table-valeur" id="int_ide" name="int_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_ide();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Prénom :</th>
                                <td><input class="table-valeur" id="int_pre" name="int_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_pre();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Nom :</th>
                                <td><input class="table-valeur" id="int_nom" name="int_nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_nom();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Téléphone :</th>
                                <td><input class="table-valeur" id="int_tel" name="int_tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_tel();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Mail :</th>
                                <td><input class="table-valeur" id="int_mai"  name="int_mai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_mai();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Niveau :</th>
                                <td><input class="table-valeur" id="int_spe" name="int_spe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unIntervenant']->value->getInt_spe();?>
"></td>
                            </tr>
                            <tr>
                                <td><input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=intervenant"' value="Retour"></td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-5"></div>
                </div>


            <?php }?>

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
</html><?php }
}
