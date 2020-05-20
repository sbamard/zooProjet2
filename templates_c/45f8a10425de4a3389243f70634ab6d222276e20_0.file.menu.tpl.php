<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 21:39:33
  from '/var/www/vhosts/pj-zoo.fr/httpdocs/public/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9cc515de1477_48469784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f8a10425de4a3389243f70634ab6d222276e20' => 
    array (
      0 => '/var/www/vhosts/pj-zoo.fr/httpdocs/public/menu.tpl',
      1 => 1587332341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9cc515de1477_48469784 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">l
    <div class="col-md-12 ">

        <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button> <a class="navbar-brand nav-color" href="index.php">Accueil </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a class="nav-color" href="index.php?gestion=Intervenant">Intervenants</a>
                    </li>
                    <li>
                        <a id="enclos" href="index.php?gestion=Enclos">Enclos</a>
                    </li>
                    <li>
                        <a class="nav-color" href="index.php?gestion=Contact">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="deco" id="enclos" href="index.php?gestion=Authentification&action=deconnexion"><?php echo $_smarty_tpl->tpl_vars['deconnexion']->value;?>
</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>
                    
                    <?php }
}
