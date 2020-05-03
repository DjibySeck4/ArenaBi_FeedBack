<?php
/* Smarty version 3.1.30, created on 2020-05-01 18:47:26
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\personne\arbitre\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eac529e21b5e0_42996752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c816999e7f6567ea21e9d1b7a5c8d85b035682f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\personne\\arbitre\\edit.html',
      1 => 1588351429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../partials/contenu_index/head.html' => 1,
    'file:../../../partials/contenu_index/top_barre.html' => 1,
    'file:../../../partials/contenu_index/logo_barre.html' => 1,
    'file:../../../partials/contenu_index/menu.html' => 1,
  ),
),false)) {
function content_5eac529e21b5e0_42996752 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>update arbitre</title>
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
			<div class="panel-heading"><b>Changement des coordonnées de l'arbitre ...</b></div>
				<div class="panel-body">
					<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Arbitre/update/<?php echo $_smarty_tpl->tpl_vars['personne']->value->getIdPersonne();?>
" method="POST" enctype="multipart/form-data">
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="id">Identifiant</label>
								<input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getIdPersonne();?>
" readonly id="id" autofocus required >
							</div>
							<div class="form-group col-md-5">
								<label for="nom">Nom</label>
								<input type="text" name="nom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
" placeholder="Nom" id="nom" autofocus required>
							</div>
							<div class="form-group col-md-5">
								<label for="prenom">Prénom</label>
								<input type="prenom" name="prenom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getPrenom();?>
" placeholder="Prénom" id="prenom" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col-4 form-group">
								<label for="dateNaissance">Date de naissance</label>
								<input type="date" name="dateNaissance" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getDateNaissance();?>
" placeholder="Date de naissance" id="dateNaissance" required>
							</div>
							<div class="col">
								<label for="surnom">Surnom</label>
								<input type="text" name="surnom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getSurnom();?>
" placeholder="Surnom" id="surnom">
							</div>
							<div class="col">
								<label for="ville">Ville</label>
								<input type="text" name="ville" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getVille();?>
" placeholder="Ville" id="ville" required>
							</div>
						</div>
						<div class="form-group">
							<label for="adresse">Adresse</label>
							<input type="text" name="adresse" class="form-control" id="addresse" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getAdresse();?>
" placeholder="Vous-habitez ou ?" required>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="photo">Photo</label>
								<input type="file" name="photo" class="form-control" id="photo" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getPhotoPersonne();?>
" required>
							</div>
							<div class="form-group col-md-3">
								<label for="metier">Metier</label>
								<input type="text" name="metier" class="form-control" id="metier" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getMetierPersonne();?>
">
							</div>
							<div class="form-group col-md-3">
								<label for="nationalite">Nationalite</label>
								<input type="text" name="nationalite" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['personne']->value->getNationalite();?>
" placeholder="nationalite" id="nationalite">
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
								<textarea name="description" id="description" class="form-control"  rows="2"><?php echo $_smarty_tpl->tpl_vars['personne']->value->getDescription();?>
</textarea>
							</div>
						<div class="form-group">
							<input class="btn btn-info" type="submit" name="editer" value="Enregistrer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
