<?php
/* Smarty version 3.1.30, created on 2020-05-19 06:36:02
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\lutte\combat\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec362323b9f56_10887800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57630b8c4ba8ecc6360be9ea2b6b0195b95555fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\lutte\\combat\\add.html',
      1 => 1589862956,
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
function content_5ec362323b9f56_10887800 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--Codée par Djiby Seck =====> -->
 <html>
	<head>
		<meta charset="UTF-8">
		<title>Add Combat</title>
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
			<div class="panel-heading"><b>Ajouter un combat</b></div>
				<div class="panel-body">

					<!-- Formulaire Saisie -->
					<form class="well" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Combat/add" method="POST" enctype="multipart/form-data">
						<!-- Les 2 lutteurs -->
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="lutteur1">Lutteur1</label>
								<select id="lutteur1" name="lutteur1" class="form-control custum-select" required>
									<option >Séléctionnez un lutteur </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_lutteurs']->value, 'lutteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lutteur']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getIdLutteur();?>
"><?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getPersonne()->getNom();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="lutteur1_valid"></span>
							</div>
																<h1>&</h1>
							<div class="form-group col">
								<label for="lutteur2">Lutteur2</label>
								<select id="lutteur2" name="lutteur2" class="form-control custum-select" required>
									<option >Séléctionnez un lutteur </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_lutteurs']->value, 'lutteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lutteur']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getIdLutteur();?>
"><?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['lutteur']->value->getPersonne()->getNom();?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="lutteur2_valid"></span>
							</div>
						</div>
						<!--Les 3 Arbitres -->
						<div class="form-row">
							<div class="col-4 form-group">
								<label for="arbitre1">Arbitre1</label>
								<select id="arbitre1" name="arbitre1" class="form-control custum-select" required>
									<option >Séléctionnez un arbitre </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_arbitres']->value, 'arbitre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arbitre']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getIdArbitre();?>
"><?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getNom();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="arbitre1_valid"></span>
							</div>
							<div class="col">
								<label for="arbitre2">Arbitre2</label>
								<select id="arbitre2" name="arbitre2" class="form-control custum-select" required>
									<option >Séléctionnez un arbitre </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_arbitres']->value, 'arbitre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arbitre']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getIdArbitre();?>
"><?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getNom();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="lutteur2_valid"></span>
							</div>
							<div class="col">
								<label for="arbitre3">Arbitre3</label>
								<select id="arbitre3" name="arbitre3" class="form-control custum-select" required>
									<option >Séléctionnez un arbitre </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_arbitres']->value, 'arbitre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arbitre']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getIdArbitre();?>
"><?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['arbitre']->value->getPersonne()->getNom();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="lutteur3_valid"></span>
							</div>							
						</div>

						<!-- Stade  / Promoteur /Consultant -->
						<div class="form-row">
							<div class="col-4 form-group">
								<label for="stade">Stade</label>
								<select id="stade" name="stade" class="form-control custum-select" required>
									<option >Séléctionnez un stade </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_stades']->value, 'stade');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stade']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['stade']->value->getIdLieuStade();?>
"><?php echo $_smarty_tpl->tpl_vars['stade']->value->getNomLieu();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="stade_valid"></span>
							</div>
							<div class="col">
								<label for="promoteur">Promoteur</label>
								<select id="promoteur" name="promoteur" class="form-control custum-select" required>
									<option >Le promoteur du combat </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_promoteurs']->value, 'promoteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['promoteur']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['promoteur']->value->getIdPromoteur();?>
"><?php echo $_smarty_tpl->tpl_vars['promoteur']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['promoteur']->value->getPersonne()->getNom();?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="promoteur_valid"></span>
							</div>
							<div class="col">
								<label for="consultant">Consultant</label>
								<select id="consultant" name="consultant" class="form-control custum-select" required>
									<option >Le consultant du combat </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_consultants']->value, 'consultant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['consultant']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['consultant']->value->getIdConsultant();?>
"><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getNom();?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="consultant_valid"></span>
							</div>						
						</div>
						<!-- Tournoi / NumJour / Date -->
						<div class="form-row">
							<div class="col-4 form-group">
								<label for="tournoi">Tournoi</label>
								<select id="tournoi" name="tournoi" class="form-control custum-select" required>
									<option >Séléctionnez un tournoi de lutte </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_tournois']->value, 'tournoi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournoi']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value->getIdTournoiLutte();?>
"><?php echo $_smarty_tpl->tpl_vars['tournoi']->value->getNomTournoi();?>
</option> 
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
								<span id="tournoi_valid"></span>
							</div>
							<div class="col">
								<label for="jour">Jour</label>
								<select id="jour" name="jour" class="form-control custum-select" required>
									<option >Le Jour du combat </option>
									<option value="1">Lundi</option>
									<option value="2">Mardi</option>
									<option value="3">Mercredi</option>
									<option value="4">Jeudi</option>
									<option value="5">Vendredi</option>
									<option value="6">Samedi</option>
									<option value="7">Dimanche</option>
								</select>
								<span id="jour_valid"></span>
							</div>
							
							<div class="col">
								<label for="date">Date du combat</label>
								<input type="date" name="date" id="date" required class="form-control">
								<span id="date_valid"></span>
							</div>						
						</div>

						<!-- Photo / Video / IsGrandCombat -->
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="photo">Photo</label>
								<input type="file" name="photo" class="form-control" id="photo" required>
								<span id="photo_valid"></span>
							</div>
							<div class="form-group col-md-4">
								<label for="video">Video</label>
								<input type="file" name="video" class="form-control" id="video" required>
								<span id="video_valid"></span>
							</div>
							<div class="form-group col-md-4 form-inline">
								<label for="isGrandCombat">Grand combat ?</label>
									Oui : <input type="radio" name="isGrandCombat" value="1" id="isGrandCombat" required>  
									Non : <input type="radio" name="isGrandCombat" value="0" id="isGrandCombat" required> 
							
								<span id="video_valid"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="description">Observation</label>
							<textarea name="description" id="description" class="form-control" rows="2"></textarea>
							<span id="description_valid"></span>
						</div>
						
						<!-- Validation -->
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
