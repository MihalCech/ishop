<?php
/* Smarty version 3.1.45, created on 2022-07-13 02:53:03
  from 'C:\OpenServer\domains\ishop2.cz\app\views\templates\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62ce095f6b2b32_81067179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f0fe5d02a4ceb4fcb430e3bb11cc1f39345dc2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ishop2.cz\\app\\views\\templates\\parts\\footer.tpl',
      1 => 1657669467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ce095f6b2b32_81067179 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4>Информация</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О магазине</a></li>
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Время работы</h4>
                    <ul class="list-unstyled">
                        <li>г. Киев, ул. Пушкина, 10</li>
                        <li>пн-вс: 9:00 - 18:00</li>
                        <li>без перерыва</li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Контакты</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:5551234567">555 123-45-67</a></li>
                        <li><a href="tel:5551234567">555 123-45-68</a></li>
                        <li><a href="tel:5551234567">555 123-45-69</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Мы в сети</h4>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<button id="top">
    <i class="fas fa-angle-double-up"></i>
</button>

<div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-cart-content">

            </div>
        </div>
    </div>
</div>



<?php echo '<script'; ?>
>
    const PATH = '<?php echo PATH;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PATH;?>
/assets/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PATH;?>
/assets/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PATH;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
