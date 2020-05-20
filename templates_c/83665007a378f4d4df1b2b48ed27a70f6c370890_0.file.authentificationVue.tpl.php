<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 10:21:56
  from '/Applications/MAMP/htdocs/zooDisii/intranet-05/mod_authentification/vue/authentificationVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9ad4c481b894_75574816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83665007a378f4d4df1b2b48ed27a70f6c370890' => 
    array (
      0 => '/Applications/MAMP/htdocs/zooDisii/intranet-05/mod_authentification/vue/authentificationVue.tpl',
      1 => 1587193500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9ad4c481b894_75574816 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="public/images/logo.PNG" />
    </head>
    <body class="authentification">

        <div class="container-fluid">

            <div class="col-md-12 text-center">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="index.php"><img class='plogo' src="public/images/plogo.PNG" ></a>
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-md-offset-1">

                    <p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class="pos-messageErreur" <?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </p>

                </div>

            </div>	

            <div class="row">

                <div class="col-md-4 col-4">
                </div>
                <div class="col-md-4 col-4">

                    <br>
                    <form role="form" action="index.php" method="POST" >
                        <input type="hidden" name="gestion" value="authentification">
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                        <div class="form-group">
                            <label for="login">
                                S'identifier : 
                            </label>

                            <input class="form-control" type="text" name="f_login" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['authentification']->value->getF_login();?>
">
                        </div>


                        <div class="form-group">
                            <label for="pw">
                                Mot de passe : 
                            </label>

                            <input autocomplete="off" class="form-control" type="password" name="f_motdepasse"  maxlength="255" value="">
                        </div>


                        <label for="valider">
                        </label>
                        <input type="submit"  class="btn btn-light btn-sm"   name="valider" value="Connexion"> 


                    </form> 
                </div>
                <div class="col-md-4 col-4">
                </div>


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
</html><?php }
}
