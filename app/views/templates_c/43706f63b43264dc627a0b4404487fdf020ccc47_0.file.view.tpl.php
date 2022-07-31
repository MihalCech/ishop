<?php
/* Smarty version 3.1.45, created on 2022-07-16 12:53:55
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\Product\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62d28ab31a6f20_43368507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43706f63b43264dc627a0b4404487fdf020ccc47' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\Product\\view.tpl',
      1 => 1657965231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d28ab31a6f20_43368507 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
           <?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs'];?>

        </ol>
    </nav>
</div>


<div class="container py-3">
    <div class="row">

        <div class="col-md-4 order-md-2">
            <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['title'];?>
</h1>

            <ul class="list-unstyled">
                <li><i class="fas fa-check text-success"></i> В наличии</li>
                <li><i class="fas fa-shipping-fast text-muted"></i> Ожидается</li>
                <li><i class="fas fa-hand-holding-usd"></i> <span class="product-price">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['old_price']) {?>
                        <small>$<?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['old_price'];?>
</small>
                        <?php }?>
                    $<?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['price'];?>
</li>
            </ul>

            <div id="product">
                <div class="input-group mb-3">
                    <input id="input-quantity" type="text" class="form-control" name="quantity" value="1">
                    <button class="btn btn-danger add-to-cart" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['product_view_by'];?>
</button>
                </div>
            </div>

        </div>

        <div class="col-md-8 order-md-1">

            <ul class="thumbnails list-unstyled clearfix">
                <li class="thumb-main text-center">
                    <a class="thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['img'];?>
" data-effect="mfp-zoom-in">
                        <img src="<?php echo PATH;
echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['img'];?>
" alt="">
                    </a>
                </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['gallery'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['gallery'], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <li class="thumb-additional">
                    <a class="thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['row']->value->img;?>
" data-effect="mfp-zoom-in">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value->img;?>
" alt="">
                    </a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>

            <?php echo $_smarty_tpl->tpl_vars['data']->value['product'][$_smarty_tpl->tpl_vars['data']->value['id']]['content'];?>



        </div>

    </div>
</div><?php }
}
