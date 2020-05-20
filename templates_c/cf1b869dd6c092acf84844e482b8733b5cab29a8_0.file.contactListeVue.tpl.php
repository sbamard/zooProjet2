<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 22:01:07
  from '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_contact/vue/contactListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9cca230fc153_86083186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1b869dd6c092acf84844e482b8733b5cab29a8' => 
    array (
      0 => '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_contact/vue/contactListeVue.tpl',
      1 => 1587333040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
  ),
),false)) {
function content_5e9cca230fc153_86083186 (Smarty_Internal_Template $_smarty_tpl) {
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
