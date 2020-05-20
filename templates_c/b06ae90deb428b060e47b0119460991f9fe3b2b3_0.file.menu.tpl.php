<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 16:31:30
  from 'C:\xampp\htdocs\intranet-03\public\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c60c23ffb55_06851091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06ae90deb428b060e47b0119460991f9fe3b2b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\public\\menu.tpl',
      1 => 1587305719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9c60c23ffb55_06851091 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <a class="nav-color" href="index.php?gestion=intervenant">Intervenants</a>
                    </li>
                    <li>
                        <a id="enclos" href="index.php?gestion=enclos">Enclos</a>
                    </li>
                    <li>
                        <a class="nav-color" href="index.php?gestion=contact">Contact</a>
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
