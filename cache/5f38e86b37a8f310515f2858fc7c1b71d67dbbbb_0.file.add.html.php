<?php
/* Smarty version 3.1.30, created on 2020-05-17 23:42:44
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\lutte\typeDeChute\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1afd4dd9bf1_20818996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f38e86b37a8f310515f2858fc7c1b71d67dbbbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\lutte\\typeDeChute\\add.html',
      1 => 1589751071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../partials/contenu_index/head.html' => 1,
    'file:../../../partials/contenu_index/top_barre.html' => 1,
    'file:../../../partials/contenu_index/logo_barre.html' => 1,
    'file:../../../partials/contenu_index/menu.html' => 1,
    'file:../../../partials/contenu_index/scripts.html' => 1,
  ),
),false)) {
function content_5ec1afd4dd9bf1_20818996 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--Codée par Djiby Seck =====> -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Add type de chute</title>
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
	<body class="well">
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
			<div class="panel-heading"><b>Ajouter un nouveau type de chute</b></div>
				<div class="panel-body">
					<form class="well" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Chute/add" method="POST" enctype="multipart/form-data">
						<div class="form-group">
                            <label for="designation">Désignation chute</label>
                            <input type="text" name="designation" class="form-control" placeholder="Nom de la chute" id="designation" autofocus required>
                            <span id="typeDechute_valid"></span>
                        </div>
                        <div class="form-group">
                            <label for="particularite_chute">Popularité de la chute</label>
                            <input type="text" name="particularite" class="form-control" placeholder="C'est quoi la particularité de cette chute ? " id="particularite_chute" required>
                            <span id="particularite_chute_valid"></span>
                        </div>                        
                        <div class="form-group">
                            <label for="photo">Exemple Photo/>vidéo</label>
                            <input type="file" name="photo" class="form-control" id="photo" required>
                            <span id="photo_valid"></span>
                        </div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="valider" value="Enregistrer"  id="button_soumission"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
			</div>
		</div>

		  <!-- <====== Script =====> -->
		  <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		  <!-- <====== End Script =====> -->

		  <literal>
			<?php echo '<script'; ?>
 src="<?php echo base_url();?>
public/js/personne.js" id="src"><?php echo '</script'; ?>
>
		</literal>
	</body>
</html>

<?php }
}
