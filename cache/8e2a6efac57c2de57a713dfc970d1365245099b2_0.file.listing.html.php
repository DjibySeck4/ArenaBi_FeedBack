<?php
/* Smarty version 3.1.30, created on 2020-04-21 21:07:15
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\personne\listing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e9f4463a1b171_31618803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e2a6efac57c2de57a713dfc970d1365245099b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\personne\\listing.html',
      1 => 1587494896,
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
function content_5e9f4463a1b171_31618803 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listing</title>
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



		<div class="col-md-8 col-lg-10 col-xs-12 col-md-offset-2" style="margin-top:70px; margin-left:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Surnom</th>
                                <th>Date naissance</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Description</th>
                                <th>Metier</th>
                                <th>Sexe</th>
                                <th>Nationalite</th> 
                                <th>Edite</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_personnes']->value, 'personne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['personne']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getIdPersonne();?>
</td>
                                    <td><img width="45px" height="30px" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/<?php echo $_smarty_tpl->tpl_vars['personne']->value->getPhoto();?>
" alt="photo"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getSurnom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getDateNaissance();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getAdresse();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getVille();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getDescription();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getMetier();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getSexe();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['personne']->value->getNationalite();?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personne/edit/<?php echo $_smarty_tpl->tpl_vars['personne']->value->getIdPersonne();?>
">Editier</a></td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Personne/delete/<?php echo $_smarty_tpl->tpl_vars['personne']->value->getIdPersonne();?>
" onclick="return confirm('Voulez-vous bien supprimer ?')" >Suprimer</a></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <tbody>
                    </table>
				</div>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
