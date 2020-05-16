<?php
/* Smarty version 3.1.30, created on 2020-05-10 03:03:06
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\personne\arbitre\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eb752cabc8377_21763278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a80c5e6367d4234eaab6ea6847aa834f268f317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\personne\\arbitre\\add.html',
      1 => 1589072531,
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
function content_5eb752cabc8377_21763278 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--Codée par Djiby Seck =====> -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Add arbitre</title>
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
			<div class="panel-heading"><b>Formulaire d'ajout d'un arbitre</b></div>
				<div class="panel-body">
					<div class="form-group">
						<div class="btn btn-defaul" id="text_select_ancien_lutteur"><b> Selectionner Un Ancien Lutteur</b></div>
						<div class="btn btn-defaul" id="frm_add_new_arbitre_text" style="display: none;"><b>Ajouter Un nouveau Arbitre</b></div>
					</div>  

					<!--Formulaire de rechercher si cet arbitre existe dans la table des lutteurs -->
					<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
lutteur/getSurnom" method="post" class="form-inline form-group" id="frm_rechercher_lutteur">
						<div class="form-group mx-sm-4">
							<input type="hidden" id="base" value="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
							<input type="text" class="form-control" id="surnom_lutteur" name="surnom" placeholder="Entrez le surnom de l'arbitre">
							<input type="submit" class="btn btn-primary" name="q" value="Rechercher">
						</div>					
					</form>

					<!-- Formulaire Saisie -->
					<form class="well" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Arbitre/add" method="POST" enctype="multipart/form-data">
						<div class="info_personne" id="info_personne">
							<?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_extract/personne/formulairedAjout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						</div>
						<!-- ce champ s'affiche k si on seach et trouve un lutteur-->
						<div class="liste_lutteurs form-group" id="liste_lutteurs" style="display: none;">
							<select name="idPersonne" id="idPersonne" class="form-control custom-select">
							</select>
						</div>
						
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="valider" value="Enregistrer"  id="button_soumission"/>
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
