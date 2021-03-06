<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 22:24:31
  from 'C:\xampp\htdocs\intranet-03\mod_animal\vue\animalListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9cb37f90f626_49047804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f21cbce4ae1a11d8babeeb79568970d61a787f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\intranet-03\\mod_animal\\vue\\animalListeVue.tpl',
      1 => 1587327218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
  ),
),false)) {
function content_5e9cb37f90f626_49047804 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        <link href="public/css/sweetalert2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container-fluid">

            <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="row">
                <div class="col-md-4 ">
                    <a href="index.php?gestion=accueil"><img src="public/images/logo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="interv col-md-2 space">
                    <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Moderateur') {?>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='gestion' value='animal'>
                            <input type='hidden' name='action' value='form_ajouter'>
                            Ajouter un animal :
                            <input type="submit"  class="btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                        </form>
                    <?php }?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-md-offset-1 ">
                    <p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class='pos-message'<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </p>
                </div>

            </div>



            <div class="row">
                <!-- ICI LES DONNES  -->
                <div class='col-md-2'></div>
                <div id="tableau" class="col-md-offset-1 col-md-5 col-md-offset-1">
                    <table class="table">
                        <thead class="">
                            <tr>

                                <th>
                                    PRENOM
                                </th>
                                <th>
                                    RACE
                                </th>

                                <th>
                                    GENRE
                                </th>

                                <th>
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAnimal']->value, 'animal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
?>
                                <tr>

                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_pre'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_rac'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_sex'];?>

                                    </td>


                                    <td>
                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='ani_ide' value='<?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='animal'>
                                            <input type='hidden' name='action' value='form_consulter'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
                                        </form>

                                        <?php if ($_smarty_tpl->tpl_vars['role']->value == 'Moderateur') {?>

                                            <form action='index.php' method='post'>
                                                <input type='hidden' name='ani_ide' value='<?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_ide'];?>
'>
                                                <input type='hidden' name='gestion' value='animal'>
                                                <input type='hidden' name='action' value='form_modifier'>

                                                <input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
                                            </form>

                                            <form action='index.php' method='post'>
                                                <input type='hidden' name='ani_ide' value='<?php echo $_smarty_tpl->tpl_vars['animal']->value['ani_ide'];?>
'>
                                                <input type='hidden' name='gestion' value='animal'>
                                                <input type='hidden' name='action' value='form_supprimer'>

                                                <input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
                                            </form>

                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
} else {
?>
                                <tr>
                                    <td colspan='6'>Aucun animal..</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
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
        <?php echo '<script'; ?>
 src="public/js/sweetalert2.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function sweetalertclick(preAnimal) {
                Swal.fire(
                        'Ajouté !',
                        'Vous avez bien ajouté l\'animal "' + preAnimal + '" !',
                        'success',
                        );
            }
            if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "1") {
                sweetalertclick("<?php echo $_smarty_tpl->tpl_vars['PreAnimal']->value;?>
");
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function sweetalertclick2(preAnimal) {
                Swal.fire(
                        'Modifié !',
                        'La fiche de l\'animal à bien été modifié !',
                        'success',
                        );
            }
            if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "2") {
                sweetalertclick2("<?php echo $_smarty_tpl->tpl_vars['EditAnimal']->value;?>
");
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function sweetalertclick3(preAnimal) {
                Swal.fire(
                        'Supprimé !',
                        'La fiche de l\'animal à bien été supprimé !',
                        'success',
                        );
            }
            if (<?php echo $_smarty_tpl->tpl_vars['Succes']->value;?>
 == "3") {
                sweetalertclick3("<?php echo $_smarty_tpl->tpl_vars['DeleteAnimal']->value;?>
");
            }
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
