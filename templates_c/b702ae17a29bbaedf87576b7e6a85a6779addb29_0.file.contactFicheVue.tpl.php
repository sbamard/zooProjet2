<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 09:04:57
  from 'C:\xampp\htdocs\intranet-03\mod_contact\vue\contactFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9bf81905a323_85668149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b702ae17a29bbaedf87576b7e6a85a6779addb29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\mod_contact\\vue\\contactFicheVue.tpl',
      1 => 1587279641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9bf81905a323_85668149 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <div class="col-md-4 space">
                            <a href="index.php?gestion=contact"><img src="public/images/plogo.PNG" ></a>
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
                            <p <?php if ($_smarty_tpl->tpl_vars['unContact']->value->getMessageErreur() != '') {?> class="pos-messageErreur" <?php }?>>
				<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getMessageErreur();?>

                            </p>
                            </div>
                    </div>							
                    <div class="row">
			<!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
			<div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                            <form action="index.php" method="post" novalidate="">
				<input type="hidden" name="gestion" value="contact">
				<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                                 <input type="hidden" id="int_mpa" name="int_mpa" value="">   
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
					<div class="form-group">
                                            Identifiant : 
                                            <input class="form-control" id="int_ide" name="int_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_ide();?>
" readonly>
					</div>
                                    <?php }?>
                                        <div class="form-group">
                                            Prénom <sup>(*)</sup> :
                                            <strong>    
						<input class="form-control" id="int_pre" name="int_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_pre();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                            </strong>
                                        </div>

                                        <div class="form-group">
                                            Nom <sup>(*)</sup>:
                                            <input class="form-control" id="int_nom" name="int_nom" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                        </div>

                                        <div class="form-group">
                                            Téléphone :
                                            <input class="form-control" id="int_tel" name="int_tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_tel();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>
                                        <div class="form-group">
                                            Mail :
                                            <input class="form-control" id="int_mai"  name="int_mai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_mai();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>
                                         <div class="form-group">
                                            Niveau :
                                            <input class="form-control" id="int_spe" name="int_spe" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_spe();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>
                                        <div class="form-group">
                                            Login :
                                            <input class="form-control" id="int_log"  name="int_log" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_log();?>
"   <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                        </div>
                                        <div class="form-group">
                                            Mot de passe :
                                            <input class="form-control" id="int_mpa"  name="int_mpa" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unContact']->value->getInt_mpa();?>
"   <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-11">
						<input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=contact"' value="Retour">
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
 src="public/js/scripts.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
