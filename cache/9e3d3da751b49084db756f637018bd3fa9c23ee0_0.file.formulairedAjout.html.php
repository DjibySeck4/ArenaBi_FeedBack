<?php
/* Smarty version 3.1.30, created on 2020-05-02 01:13:38
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\partials\contenu_extract\personne\formulairedAjout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eacad220737f5_48118447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3d3da751b49084db756f637018bd3fa9c23ee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\partials\\contenu_extract\\personne\\formulairedAjout.html',
      1 => 1588374817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eacad220737f5_48118447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Nom" id="nom" autofocus required>
        <span id="nom_valid"></span>
    </div>
    <div class="form-group col-md-6">
        <label for="prenom">Prénom</label>
        <input type="prenom" name="prenom" class="form-control" placeholder="Prénom" id="prenom" required>
        <span id="prenom_valid"></span>
    </div>
</div>
<div class="form-row">
    <div class="col-4 form-group">
        <label for="dateNaissance">Date de naissance</label>
        <input type="date" name="dateNaissance" class="form-control" placeholder="Date de naissance" id="dateNaissance" required>
        <span id="dateNaissance_valid"></span>
    </div>
    <div class="col">
        <label for="surnom">Surnom</label>
        <input type="text" name="surnom" class="form-control" placeholder="Surnom" id="surnom" required>
        <span id="surnom_valid"></span>
    </div>
    <div class="col">
        <label for="ville">Ville</label>
        <input type="text" name="ville" class="form-control" placeholder="Ville" id="ville" required>
        <span id="ville_valid"></span>
    </div>
</div>
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Vous-habitez ou ?" required>
    <span id="adresse_valid"></span>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control" id="photo" required>
        <span id="photo_valid"></span>
    </div>
    <div class="form-group col-md-3">
        <label for="metier">Metier</label>
        <input type="text" name="metier" class="form-control" id="metier">
        <span id="metier_valid"></span>
    </div>
    <div class="form-group col-md-3">
        <label for="nationalite">Nationalite</label>
        <input type="text" name="nationalite" class="form-control" placeholder="nationalite" id="nationalite" required>
        <span id="nationalite_valid"></span>
    </div>
    <div class="form-group col-md-2">
        <label for="genre">Genre</label>
        <select id="genre" name="genre" class="form-control" required>
            <option >Votre genre </option>
            <option selected value="M">Masculin</option>
            <option value="F">Feminin</option>
        </select>
        <span id="genre_valid"></span>
    </div>
    
</div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"  rows="2"></textarea>
    </div>
<?php }
}
