<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 18:26:04
  from 'C:\xampp\htdocs\intranet-03\mod_animal\vue\animalFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c7b9c98f5e1_48397744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0fe004364ce419e482c3c055bc85febd948a54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\mod_animal\\vue\\animalFicheVue.tpl',
      1 => 1587313563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
  ),
),false)) {
function content_5e9c7b9c98f5e1_48397744 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="index.php?gestion=animal"><img src="public/images/logo.PNG" ></a>
                </div>
                <div id="unAnimal" class="col-md-4 space text-center">
                    <h3><?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pre();?>
</h3>
                </div>
                <div class="col-md-4 space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p <?php if ($_smarty_tpl->tpl_vars['unAnimal']->value->getMessageErreur() != '') {?> class="pos-messageErreur" <?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getMessageErreur();?>

                    </p>
                </div>
            </div>

            <div class="col-md-4"></div>

            <div class="row">
                <div class="col-md-4">
                    <img class="align-content-center" id="photoAnimal" src="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pix();?>
" alt='photo' >
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                <div class="row" id='ficheAnimal'>
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div id="tableau" class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                        <form action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="animal">
                            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">



                            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                <div class="form-group">
                                    Identifiant : 
                                    <input class="form-control" id="ani_ide" name="ani_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_ide();?>
" readonly>
                                </div>
                            <?php }?>

                            <div class="form-group">
                                Nom <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <strong>    
                                    <input class="form-control" id="ani_pre" name="ani_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pre();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                </strong>
                            </div>
                            <div class="form-group">
                                Race <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <input class="form-control" id="ani_rac" name="ani_rac" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_rac();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                            <div class="form-group">
                                Genre <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <input class="form-control" id="ani_sex" name="ani_sex" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_sex();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>

                            <div class="form-group">
                                Date de Naissance <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup><?php }?> :
                                <input class="form-control" id="ani_nai" name="ani_nai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_nai();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>

                            <div class="form-group">
                                Quelques mots sur moi.. <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?><sup>(*)</sup>:<?php }?>
                                <input class="form-control" id="ani_tex" name="ani_tex" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_tex();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                            <div class="form-group">
                                <div  class="col-md-1 btn btn-outline-primary ">
                                    <a id="boutonJS" href="javascript:history.go(-1)">Retour</a>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                    <div class="col-md-1">
                                        <input id="boutonJS" type="submit" class="btn btn-warning btn-sm" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                    </div>
                                <?php }?>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'consulter') {?>
                <div class="row" id='ficheAnimal'>
                    <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                    <div class="col-md-4"></div>
                    <div id="tableau" class="col-md-4">
                        <table action="index.php" method="post" novalidate="">
                            <input type="hidden" name="gestion" value="animal">
                            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">


                            <tr>
                                <th class="table-titre">N° d'identifiant :</th>
                                <td><input class="table-valeur" id="ani_ide" name="ani_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_ide();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Nom :</th>
                                <td><input class="table-valeur" id="ani_pre" name="ani_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pre();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Race :</th>
                                <td><input class="table-valeur" id="ani_rac" name="ani_rac" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_rac();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Genre :</th>
                                <td><input class="table-valeur" id="ani_sex" name="ani_sex" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_sex();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Date de naissance :</th>
                                <td><input class="table-valeur" id="ani_nai" name="ani_nai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_nai();?>
"></td>
                            </tr>
                            <tr>
                                <th class="table-titre">Quelques mots sur moi..</th>
                                <td><textarea value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_tex();?>
" id="story" name="story" rows="5" cols="33"></textarea></td>
                            </tr>
                            <tr>
                                <td><a href="javascript:history.go(-1)" type="submit" class="btn btn-warning btn-sm">Retour</a></td>
                            </tr>
                        </table>

                    </div>
                               <div class="col-md-4"></div>
                </div>
            <?php }?>
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
