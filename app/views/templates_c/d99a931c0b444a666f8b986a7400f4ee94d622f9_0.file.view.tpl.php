<?php
/* Smarty version 3.1.45, created on 2022-07-17 21:48:16
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\Category\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62d4597095c4d1_93612817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99a931c0b444a666f8b986a7400f4ee94d622f9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\Category\\view.tpl',
      1 => 1658083693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4597095c4d1_93612817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs'];?>

        </ol>
    </nav>
</div>

<div class="container py-3">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['category'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <div class="col-lg-12 category-content">
            <h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['category']->value->title;?>
</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value->content)) {?>
            <div class="category-desc">
                <?php echo $_smarty_tpl->tpl_vars['category']->value->content;?>

            </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="input-sort">Сортировка:</label>
                        <select class="form-select" id="input-sort">
                            <option selected="">По умолчанию</option>
                            <option value="1">Название (А - Я)</option>
                            <option value="2">Название (Я - А)</option>
                            <option value="3">Цена (низкая &gt; высокая)</option>
                            <option value="3">Цена (высокая &gt; низкая)</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="input-sort">Показать:</label>
                        <select class="form-select" id="input-sort">
                            <option selected="">15</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="3">100</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['products'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->getPart('parts/products_loop');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['lang_data']->value['category_view_no_products'];?>

                <?php }?>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['countPages'] > 1) {?>
                           <?php echo $_smarty_tpl->tpl_vars['data']->value['pagination'];?>

                            <?php }?>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>
</div>
<?php }
}
