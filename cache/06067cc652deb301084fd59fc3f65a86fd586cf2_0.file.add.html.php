<?php
/* Smarty version 3.1.30, created on 2020-05-09 18:38:24
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\personne\entraineur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eb6dc80ccae64_82570867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06067cc652deb301084fd59fc3f65a86fd586cf2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\personne\\entraineur\\add.html',
      1 => 1588377228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../partials/contenu_index/head.html' => 1,
    'file:../../../partials/contenu_index/top_barre.html' => 1,
    'file:../../../partials/contenu_index/logo_barre.html' => 1,
    'file:../../../partials/contenu_index/menu.html' => 1,
    'file:../../../partials/contenu_extract/personne/formulairedAjout.html' => 1,
    'file:../../../partials/contenu_index/scripts.html' => 1,
  ),
),false)) {
function content_5eb6dc80ccae64_82570867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Add entraineur</title>
		 <!-- <====== Contenu de <head> =====> -->
            <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- <====== End Contenu de <head> =====> -->
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body  class="well">
		 <!-- <====== Top Barre =====> -->
         <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/top_barre.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <!-- <====== End Top Barre =====> -->

         <!-- <====== Logo Barre =====> -->
         <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/logo_barre.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <!-- <====== End Logo Barre =====> -->

         <!-- <====== Menu principal =====> -->
         <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="col-md-7 col-xs-7 col-md-offset-2 thumbnail" style="margin-top:70px; margin-left:350;">
		<div class="panel panel-info">
		<div class="panel-heading"><b>Formulaire d'ajout d'un entraineur</b></div>
			<div class="panel-body">
				<form  class="well" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entraineur/add" method="POST" enctype="multipart/form-data">
					<?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_extract/personne/formulairedAjout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="form-group">
						<input class="btn btn-info" type="submit" name="valider" value="Enregistrer"/>
						<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
					</div>
				</form>
				</form>
			</div>
		</div>
	</div>

	 <!-- <====== Script =====> -->
	 <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	 <!-- <====== End Script =====> -->
</body>
</html>

<?php }
}
