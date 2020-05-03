<?php
/* Smarty version 3.1.30, created on 2020-05-02 01:36:44
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\personne\manager\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eacb28c83d962_30236404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ceb91dc12c727277d9e55de6b83664b4615f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\personne\\manager\\add.html',
      1 => 1588367418,
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
function content_5eacb28c83d962_30236404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajouter personne</title>
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
	<body>
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


	<div class="col-md-7 col-xs-7 col-md-offset-2" style="margin-top:70px; margin-left:350;">
		<div class="panel panel-info">
		<div class="panel-heading"><b>Formulaire d'ajout d'un arbitre</b></div>
			<div class="panel-body">
				<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Arbitre/add" method="POST" enctype="multipart/form-data">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nom">Nom</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom" id="nom" autofocus required>
						</div>
						<div class="form-group col-md-6">
							<label for="prenom">Prénom</label>
							<input type="prenom" name="prenom" class="form-control" placeholder="Prénom" id="prenom" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col-4 form-group">
							<label for="dateNaissance">Date de naissance</label>
							<input type="date" name="dateNaissance" class="form-control" placeholder="Date de naissance" id="dateNaissance" required>
						</div>
						<div class="col">
							<label for="surnom">Surnom</label>
							<input type="text" name="surnom" class="form-control" placeholder="Surnom" id="surnom">
						</div>
						<div class="col">
							<label for="ville">Ville</label>
							<input type="text" name="ville" class="form-control" placeholder="Ville" id="ville" required>
						</div>
					</div>
					<div class="form-group">
						<label for="adresse">Adresse</label>
						<input type="text" name="adresse" class="form-control" id="addresse" placeholder="Vous-habitez ou ?" required>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="photo">Photo</label>
							<input type="file" name="photo" class="form-control" id="photo" required>
						</div>
						<div class="form-group col-md-3">
							<label for="metier">Metier</label>
							<input type="text" name="metier" class="form-control" id="metier">
						</div>
						<div class="form-group col-md-3">
							<label for="nationalite">Nationalite</label>
							<input type="text" name="nationalite" class="form-control" placeholder="nationalite" id="nationalite">
						</div>
						<div class="form-group col-md-2">
							<label for="genre">Genre</label>
							<select id="genre" name="genre" class="form-control">
								<option >Votre genre </option>
								<option selected value="M">Masculin</option>
								<option value="F">Feminin</option>
							</select>
						</div>
						
					</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="description" id="description" class="form-control"  rows="2"></textarea>
						</div>
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
