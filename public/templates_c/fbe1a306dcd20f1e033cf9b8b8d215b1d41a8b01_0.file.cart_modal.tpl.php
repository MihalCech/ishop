<?php
/* Smarty version 3.1.45, created on 2022-07-13 23:07:39
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\Cart\cart_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62cf260b3d4393_34201186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe1a306dcd20f1e033cf9b8b8d215b1d41a8b01' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\Cart\\cart_modal.tpl',
      1 => 1657742649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cf260b3d4393_34201186 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
    <?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value['cart'])) {?>
    <div class="table-responsive cart-table">
        <table class="table text-start">
            <thead>
            <tr>
                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_photo'];?>
</th>
                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_product'];?>
</th>
                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_qty'];?>
</th>
                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_price'];?>
</th>
                <th scope="col"><i class="far fa-trash-alt"></i></th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SESSION']->value['cart'], 'item', false, 'id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
                <td>
                    <a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><img src="<?php echo PATH;
echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt=""></a>
                </td>
                <td><a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                <td><a href="cart/delete?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="del-item"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr>
                <td colspan="4" class="text-end"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_total_qty'];?>
</td>
                <td class="cart-qty"><?php echo $_smarty_tpl->tpl_vars['SESSION']->value['cart.qty'];?>
</td>
            </tr>
            <tr>
                <td colspan="4" class="text-end"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_sum'];?>
</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['SESSION']->value['cart.sum'];?>
</td>
            </tr>
            </tbody>
        </table>
    </div>
        <?php } else { ?>
        <h4 class="text-start"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_empty'];?>
</h4>
    <?php }?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger ripple" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_btn_continue'];?>
</button>
    <?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value['cart'])) {?>
    <button type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_btn_order'];?>
</button>
    <button type="button" id="clear-cart" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['lang_data']->value['tpl_cart_btn_clear'];?>
</button>
    <?php }?>
</div><?php }
}
