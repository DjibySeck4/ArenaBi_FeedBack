<?php
/* Smarty version 3.1.30, created on 2020-05-02 01:51:52
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\personne\consultant\listing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eacb6181a0ec3_97772273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de48b335c40045f877b74d2ca0cc9f0eaa2493c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\personne\\consultant\\listing.html',
      1 => 1588377111,
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
function content_5eacb6181a0ec3_97772273 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listing consultant</title>
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



		<div class="col-md-8 col-lg-10 col-xs-12 col-md-offset-2 thumbnail" style="margin-top:70px; margin-left:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">Liste des arbitres</div>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_consultant']->value, 'consultant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['consultant']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getIdPersonne();?>
</td>
                                    <td><img width="45px" height="30px" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/<?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getPhotoPersonne();?>
" alt="photo"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getSurnom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getDateNaissance();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getAdresse();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getVille();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getDescription();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getMetierPersonne();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getSexe();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getNationalite();?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Consultant/edit/<?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getIdPersonne();?>
">Editier</a></td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Consultant/delete/<?php echo $_smarty_tpl->tpl_vars['consultant']->value->getPersonne()->getIdPersonne();?>
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
        
         <!-- <====== Script =====> -->
		  <?php $_smarty_tpl->_subTemplateRender("file:../../../partials/contenu_index/scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		  <!-- <====== End Script =====> -->
	</body>
</html>
<?php }
}
