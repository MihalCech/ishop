<?php
/* Smarty version 3.1.45, created on 2022-07-09 00:37:40
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\widgets\lang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62c8a3a4d40de5_62732603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c349d6e95d4b5af8706f71fd87ea280cd4ae347c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\widgets\\lang.tpl',
      1 => 1657316256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c8a3a4d40de5_62732603 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dropdown d-inline-block">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
        <img src="<?php echo PATH;?>
/assets/img/<?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['App']->value;
echo $_prefixVariable1::$app->getProperty('language')->code;?>
.png" alt="">
    </a>
    <ul class="dropdown-menu" id="languages">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value->languages, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <?php  $_prefixVariable2 = $_smarty_tpl->tpl_vars['App']->value;
if ($_prefixVariable2::$app->getProperty('language')->code == $_smarty_tpl->tpl_vars['k']->value) {?>
                <?php continue 1;?>
            <?php }?>
        <li>
            <button class="dropdown-item" data-langcode="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                <img src="<?php echo PATH;?>
/assets/img/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
.png" alt="">
                <?php echo $_smarty_tpl->tpl_vars['v']->value->title;?>
</button>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
