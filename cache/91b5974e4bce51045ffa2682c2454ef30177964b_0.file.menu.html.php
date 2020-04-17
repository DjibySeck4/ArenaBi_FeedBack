<?php
/* Smarty version 3.1.30, created on 2020-04-16 18:09:05
  from "C:\xampp\htdocs\PHP\SamaneMVC\AreneBiFeelBack\src\view\partials\contenu_index\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e988321f3fb87_44448567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91b5974e4bce51045ffa2682c2454ef30177964b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\SamaneMVC\\AreneBiFeelBack\\src\\view\\partials\\contenu_index\\menu.html',
      1 => 1587053344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e988321f3fb87_44448567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container main-menu" id="main-menu">
    <div class="row align-items-center justify-content-between">
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="home">Home</a></li>
                <li><a href="public/magazine/archive.html">Archive</a></li>
                <li><a href="public/magazine/category.html">Category</a></li>
                <li class="menu-has-children"><a href="">Post Types</a>
                <ul>
                    <li><a href="public/magazine/standard-post.html">Standard Post</a></li>
                    <li><a href="public/magazine/image-post.html">Image Post</a></li>
                    <li><a href="gallery-post.html">Gallery Post</a></li>
                    <li><a href="public/magazine/video-post.html">Video Post</a></li>
                    <li><a href="public/magazine/audio-post.html">Audio Post</a></li>
                </ul>
            </li>
            <li><a href="public/magazine/about.html">About</a></li>
            <li><a href="public/magazine/contact.html">Contact</a></li>
        </ul>
        </nav><!-- #nav-menu-container -->
        <div class="navbar-right">
            <form class="Search">
                <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                <label for="Search-box" class="Search-box-label">
                    <span class="lnr lnr-magnifier"></span>
                </label>
                <span class="Search-close">
                    <span class="lnr lnr-cross"></span>
                </span>
            </form>
        </div>
    </div>
</div>
 <!-- <====== End Menu principal =====> -->
<?php }
}
