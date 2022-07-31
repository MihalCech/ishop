<?php
/* Smarty version 3.1.45, created on 2022-07-17 15:58:12
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\parts\products_loop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62d40764699290_14814797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21831a995d69de34759ac72ddb7dc780d7bf7ba6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\parts\\products_loop.tpl',
      1 => 1658062689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d40764699290_14814797 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ((isset($_smarty_tpl->tpl_vars['lang_data']->value['main_index_featured_products']))) {?>
                    <h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['main_index_featured_products'];?>
</h3>
                <?php }?>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-tumb">
                            <a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->slug;?>
"><img src="<?php echo PATH;
echo $_smarty_tpl->tpl_vars['product']->value->img;?>
" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
</a></h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->exerpt;?>
</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->old_price) {?>
                                        <small>$<?php echo $_smarty_tpl->tpl_vars['product']->value->old_price;?>
</small>
                                    <?php }?>
                                    $<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>

                                </div>
                                <div class="product-links">
                                    <a class="add-to-cart" href="cart/add?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section><?php }
}
