<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 10:22:58
  from '/Applications/MAMP/htdocs/zooDisii/intranet-05/mod_animal/vue/animalFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9ad502ac6725_36803463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15656fb74ccdca96ff44ede18353a16189143cbd' => 
    array (
      0 => '/Applications/MAMP/htdocs/zooDisii/intranet-05/mod_animal/vue/animalFicheVue.tpl',
      1 => 1587201477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5e9ad502ac6725_36803463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/zooDisii/intranet-05/include/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
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
                            <a href="index.php?gestion=animal"><img src="public/images/plogo.PNG" ></a>
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
                            <p <?php if ($_smarty_tpl->tpl_vars['unAnimal']->value->getMessageErreur() != '') {?> class="pos-messageErreur" <?php }?>>
				<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getMessageErreur();?>

                            </p>
                            </div>
                    </div>
                            
                          
                    <div class="row" id='ficheAnimal'>
			<!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                        
                        
			<div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                            
                            
                            <form action="index.php" method="post" novalidate="">
				<input type="hidden" name="gestion" value="animal">
				<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                               
                                                                                 
                                     <img src="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pix();?>
" alt='photo' >     
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
					<div class="form-group">
                                            Identifiant : 
                                            <input class="form-control" id="ani_ide" name="ani_ide" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_ide();?>
" readonly>
					</div>
                                    <?php }?>
                                    
                                    
                                        <div class="form-group">
                                            Prénom <sup>(*)</sup> :
                                            <strong>    
						<input class="form-control" id="ani_pre" name="ani_pre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_pre();?>
"  <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                            </strong>
                                        </div>
                                        <div class="form-group">
                                            Race <sup>(*)</sup>:
                                            <input class="form-control" id="ani_rac" name="ani_rac" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_rac();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>
                                        <div class="form-group">
                                            Genre <sup>(*)</sup>:
                                            <input class="form-control" id="ani_sex" name="ani_sex" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_sex();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>

                                        <div class="form-group">
                                            Date de Naissance <sup>(*)</sup>:
                                            <input class="form-control" id="ani_nai" name="ani_nai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['unAnimal']->value->getAni_nai();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                        </div>

                                        
                                        
                                        
                                        <div class="form-group">
                                           <div class="col-md-11">
                                               <a href="javascript:history.go(-1)">Retour</a>
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
