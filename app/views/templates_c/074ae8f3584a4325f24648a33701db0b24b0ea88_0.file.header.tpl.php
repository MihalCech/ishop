<?php
/* Smarty version 3.1.45, created on 2022-07-15 11:27:30
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62d124f2130089_85449116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074ae8f3584a4325f24648a33701db0b24b0ea88' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\parts\\header.tpl',
      1 => 1657873647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d124f2130089_85449116 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <base href="<?php echo base_url();?>
">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo PATH;?>
/assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo PATH;?>
/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo PATH;?>
/assets/css/main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo PATH;?>
/assets/img/favicon.png">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->getMeta();?>

</head>
<body>

<header class="fixed-top">
    <div class="header-top py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <a href="tel:5551234567">
                        <span class="icon-phone">&#9743;</span> 555 123-45-67
                    </a>
                </div>
                <div class="col text-end icons">
                    <form>
                        <div class="input-group" id="search">
                            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_search'];?>
" name="s">
                            <button class="btn close-search" type="button"><i class="fas fa-times"></i></i></button>
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <a href="#" class="open-search"><i class="fas fa-search"></i></a>

                    <a href="#" class="relative" id="get-cart" data-bs-toggle="modal" data-bs-target="#cart-modal">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge bg-danger rounded-pill count-items">
                            <?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value['cart.qty'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['SESSION']->value['cart.qty'];?>

                            <?php } else { ?> 0
                            <?php }?>

                        </span>
                    </a>

                    <a href="#"><i class="far fa-heart"></i></a>

                    <div class="dropdown d-inline-block">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="far fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_login'];?>
</a></li>
                            <li><a class="dropdown-item" href="#"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_signup'];?>
</a></li>
                        </ul>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->getHtml();?>

                </div>
            </div>
        </div>
    </div><!-- header-top -->

    <div class="header-bottom py-2">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="<?php echo base_url();?>
"><?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['App']->value;
echo $_prefixVariable1::$app->getProperty('site_name');?>
</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

                </div>
            </nav>

        </div>
    </div><!-- header-bottom -->
</header><?php }
}
