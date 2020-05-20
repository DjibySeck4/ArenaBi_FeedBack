<?php
/* Smarty version 3.1.30, created on 2020-05-18 20:39:08
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\lutte\photo\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec2d64c9e7c05_09513629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6719cd30fbd3cd972ca90e1d02e96f02926ec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\lutte\\photo\\add.html',
      1 => 1589827055,
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
function content_5ec2d64c9e7c05_09513629 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--Codée par Djiby Seck =====> -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajouter une photo</title>
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
			<div class="panel-heading"><b>Ajouter une photo</b></div>
				<div class="panel-body">
					<form class="well" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Photo/add" method="POST" enctype="multipart/form-data">
						<div class="form-group">
                            <label for="dossier">Dossier photo</label>
                            <input type="text" name="dossier" class="form-control" placeholder="Lien du dossier" id="dossier" autofocus required>
                            <span id="dossierPhoto_valid"></span>
                        </div>
                        <div class="form-group">
                            <label for="date">Date de la photo</label>
                            <input type="date" name="date" class="form-control" placeholder="La date de prise de la photo" id="date" required>
                            <span id="datePhoto_chute_valid"></span>
                        </div>                        
                        <div class="form-group">
                            <label for="type">Type de la type</label>
                            <input type="text" name="type" class="form-control" id="type" required>
                            <span id="typePhoto_valid"></span>
						</div>
						<div class="form-group">
                            <label for="lieu">Lieu</label>
                            <input type="text" name="lieu" class="form-control" id="lieu" required>
                            <span id="typePhoto_valid"></span>
						</div>
						<div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" name="tag" class="form-control" id="tag" required>
                            <span id="tagPhoto_valid"></span>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="description" id="description" cols="30" rows="3" class="form-control" required></textarea>
							<span id="descriptionPhoto_valid"></span>
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
