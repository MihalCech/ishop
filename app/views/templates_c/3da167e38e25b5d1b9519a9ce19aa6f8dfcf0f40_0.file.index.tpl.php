<?php
/* Smarty version 3.1.45, created on 2022-07-13 01:34:16
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\Main\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62cdf6e86258f4_72495928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da167e38e25b5d1b9519a9ce19aa6f8dfcf0f40' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\Main\\index.tpl',
      1 => 1657665253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdf6e86258f4_72495928 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['data']->value['slides'])) {?>

    <div class="container-fluid my-carousel">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['data']->value['slides'])) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['data']->value['slides']); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>class="active"<?php }?> aria-current="true" aria-label="Slide <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></button>
                <?php }
}
?>
            </div>
            <div class="carousel-inner">
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['slides'], 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>active<?php }?>">
                    <img src="<?php echo PATH;
echo $_smarty_tpl->tpl_vars['slide']->value->img;?>
" class="d-block w-100" alt="...">
                </div>
                <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>
    <?php } else {
}?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->getPart("parts/products_loop");?>


<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Наши преимущества</h3>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-shipping-fast"></i></p>
                    <p>Прямые поставки от производителей</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-cubes"></i></p>
                    <p>Широкий ассортимент товара</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-hand-holding-usd"></i></p>
                    <p>Приятные и конкуретные цены</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-user-cog"></i></p>
                    <p>Профессиональная консультация и сервис</p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php }
}
