<?php
/* Smarty version 3.1.30, created on 2020-05-01 22:13:01
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\partials\contenu_extract\personne\formulairedEdite.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eac82cdb3a5b9_19572418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a20a2137d94387dd95513496f6740498bfb0019' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\partials\\contenu_extract\\personne\\formulairedEdite.html',
      1 => 1588359385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eac82cdb3a5b9_19572418 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</div><?php }
}
