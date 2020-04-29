<?php
/* Smarty version 3.1.30, created on 2020-04-23 21:26:50
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\personne\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea1ebfaaf7534_38281944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526087656881f42d8c82005581ee03cc8e73eee5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\personne\\add.html',
      1 => 1587668617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/contenu_index/head.html' => 1,
    'file:../partials/contenu_index/top_barre.html' => 1,
    'file:../partials/contenu_index/logo_barre.html' => 1,
    'file:../partials/contenu_index/menu.html' => 1,
  ),
),false)) {
function content_5ea1ebfaaf7534_38281944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajouter personne</title>
		 <!-- <====== Contenu de <head> =====> -->
            <?php $_smarty_tpl->_subTemplateRender("file:../partials/contenu_index/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
         <?php $_smarty_tpl->_subTemplateRender("file:../partials/contenu_index/top_barre.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <!-- <====== End Top Barre =====> -->

         <!-- <====== Logo Barre =====> -->
         <?php $_smarty_tpl->_subTemplateRender("file:../partials/contenu_index/logo_barre.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <!-- <====== End Logo Barre =====> -->

         <!-- <====== Menu principal =====> -->
         <?php $_smarty_tpl->_subTemplateRender("file:../partials/contenu_index/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<div class="col-md-7 col-xs-7 col-md-offset-2" style="margin-top:70px; margin-left:350;">
			<div class="panel panel-info">
				<div class="panel-heading"><b>Formulaire d'insertion d'un arbitre</b></div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personne/add" class="well" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nom" class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom" required/>
                        </div>
                        <div class="form-group">
							<label for="prenom" class="control-label">Prénom</label>
							<input class="form-control" type="text" name="prenom" id="prenom" required/>
						</div>
						<div class="form-group">
							<label for="surnom" class="control-label">Surom</label>
							<input class="form-control" type="text" name="surnom" id="surnom" required/>
                        </div>
                        <div class="form-group">
							<label for="dateNaissance" class="control-label">Date de naissance</label>
							<input class="form-control" type="date" name="dateNaissance" id="dateNaissance" required/>
						</div>
						<div class="form-group">
							<label for="adresse" class="control-label">Adresse</label>
							<input class="form-control" type="text" name="adresse" id="adresse" required/>
						</div>
                        <div class="form-group">
							<label for="ville" class="control-label">Ville</label>
							<input class="form-control" type="text" name="ville" id="ville" required/>
                        </div>
                        <div class="form-group">
							<label for="photo" class="control-label">Photo</label>
							<input class="form-control" type="file" name="photo" id="photo"/>
                        </div>
                        <div class="form-group">
							<label for="description" class="control-label">Description</label>
							<textarea class="form-control" name="description" id="description" cols="30" rows=""></textarea>
                        </div>
                        <div class="form-group">
							<label for="metier" class="control-label">Metier</label>
							<input class="form-control" type="text" name="metier" id="metier" required/>
                        </div>
                        <div class="form-group">
							<label for="sexe" class="control-label">Sexe</label>
							<input class="form-control" type="text" name="sexe" id="sexe" required/>
                        </div>
                        <div class="form-group">
							<label for="nationalite" class="control-label">Nationalite</label>
							<input class="form-control" type="text" name="nationalite" id="nationalite" required/>
                        </div>
						<div class="form-group">
							<input class="btn btn-info" type="submit" name="valider" value="Enregistrer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
