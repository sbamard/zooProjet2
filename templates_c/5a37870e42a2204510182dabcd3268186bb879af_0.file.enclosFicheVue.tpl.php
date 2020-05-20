<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 18:01:25
  from 'C:\xampp\htdocs\intranet-03\mod_enclos\vue\enclosFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c75d5baaa24_26640287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a37870e42a2204510182dabcd3268186bb879af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\mod_enclos\\vue\\enclosFicheVue.tpl',
      1 => 1587312083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9c75d5baaa24_26640287 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <a href="index.php?gestion=enclos"><img src="public/images/logo.PNG" ></a>
                        </div>
                        <div class="col-md-6 space">
                            <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                        </div>
                        <div class="col-md-2 space">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                            <p <?php if ($_smarty_tpl->tpl_vars['leEnclos']->value->getMessageErreur() != '') {?> class="pos-messageErreur" <?php }?>>
				<?php echo $_smarty_tpl->tpl_vars['leEnclos']->value->getMessageErreur();?>

                            </p>
                            </div>
                    </div>							
                    <div  class="row">
			<!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
			<div id="tableau" class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                            <form action="index.php?gestion=enclos" method="post" novalidate="">
				<input type="hidden" name="gestion" value="enclos">
				<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
					<div class="form-group">
                                            Identifiant : 
                                            <input class="form-control" id="enc_ide" name="enc_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['leEnclos']->value->getEnc_ide();?>
" readonly>
					</div>
                                    <?php }?>
                                        <div class="form-group">
                                            Nom <sup>(*)</sup> :
                                            <strong>    
						<input class="form-control" id="enc_nom" name="enc_nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['leEnclos']->value->getEnc_nom();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                            </strong>
                                        </div>
                                         <div class="form-group">
                                            Race : 
                                            <input class="form-control" id="ani_rac" name="ani_rac" type="text" value="<?php echo $_smarty_tpl->tpl_vars['leEnclos']->value->getAni_rac();?>
">
					</div> 
                                       
                                        <div class="form-group">
                                            <div class="col-md-11">
						<input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=enclos"' value="Retour">
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
</html><?php }
}
