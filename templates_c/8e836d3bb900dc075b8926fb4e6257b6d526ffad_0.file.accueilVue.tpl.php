<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 21:39:33
  from '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_accueil/vue/accueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9cc515db3f15_18618998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e836d3bb900dc075b8926fb4e6257b6d526ffad' => 
    array (
      0 => '/var/www/vhosts/pj-zoo.fr/httpdocs/mod_accueil/vue/accueilVue.tpl',
      1 => 1587331668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9cc515db3f15_18618998 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet">

        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="public/images/logo.png" />
        <link href="public/css/evo-calendar.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container-fluid">
            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="row">
                <!-- ICI LE TABLEAU DE BORD -->
                <div class="col-md-12">

                    <h2 id="title-accueil" class="space">
                        Intranet du Zoo Disii
                    </h2>
                </div>
                <div id="evoCalendar">
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
        <?php echo '<script'; ?>
 src="public/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/evo-calendar.js" type="text/javascript"><?php echo '</script'; ?>
>


    </body>
</html>
<?php }
}
