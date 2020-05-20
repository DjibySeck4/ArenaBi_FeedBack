<?php
/* Smarty version 3.1.30, created on 2020-05-18 20:54:47
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\pages\lutte\photo\listing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec2d9f7994937_13863144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa4bd2c73b450f5b232f978724c906b1cd260c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\pages\\lutte\\photo\\listing.html',
      1 => 1589825780,
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
function content_5ec2d9f7994937_13863144 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listing</title>
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



		<div class="col-md-8 col-lg-10 col-xs-12 col-md-offset-2 thumbnail" style="margin-top:70px; margin-left:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">Liste des photos de Arene bi</div>
				<div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Dossiers </th>
                                <th>Date</th>
                                <th>Lieu </th> 
                                <th>Type</th> 
                                <th>Tag</th> 
                                <th>Description</th> 
                                <th>Edite</th> 
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getIdPhoto();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getDossierPhoto();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getDatePhoto();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getLieuPhoto();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getTypePhoto();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getTag();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['photo']->value->getDescription();?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Photo/edit/<?php echo $_smarty_tpl->tpl_vars['photo']->value->getIdPhoto();?>
">Editer</a></td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Photo/delete/<?php echo $_smarty_tpl->tpl_vars['photo']->value->getIdPhoto();?>
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
