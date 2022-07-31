<div class="modal-body">
    {if !empty($SESSION.cart)}
    <div class="table-responsive cart-table">
        <table class="table text-start">
            <thead>
            <tr>
                <th scope="col">{$lang_data.tpl_cart_photo}</th>
                <th scope="col">{$lang_data.tpl_cart_product}</th>
                <th scope="col">{$lang_data.tpl_cart_qty}</th>
                <th scope="col">{$lang_data.tpl_cart_price}</th>
                <th scope="col"><i class="far fa-trash-alt"></i></th>
            </tr>
            </thead>
            <tbody>
            {foreach $SESSION.cart as $id => $item}
            <tr>
                <td>
                    <a href="product/{$item.slug}"><img src="{PATH}{$item.img}" alt=""></a>
                </td>
                <td><a href="product/{$item.slug}">{$item.title}</a></td>
                <td>{$item.qty}</td>
                <td>{$item.price}</td>
                <td><a href="cart/delete?id={$id}" data-id="{$id}" class="del-item"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            {/foreach}
            <tr>
                <td colspan="4" class="text-end">{$lang_data.tpl_cart_total_qty}</td>
                <td class="cart-qty">{$SESSION['cart.qty']}</td>
            </tr>
            <tr>
                <td colspan="4" class="text-end">{$lang_data.tpl_cart_sum}</td>
                <td>${$SESSION['cart.sum']}</td>
            </tr>
            </tbody>
        </table>
    </div>
        {else}
        <h4 class="text-start">{$lang_data.tpl_cart_empty}</h4>
    {/if}
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger ripple" data-bs-dismiss="modal">{$lang_data.tpl_cart_btn_continue}</button>
    {if !empty($SESSION.cart)}
    <button type="button" class="btn btn-primary">{$lang_data.tpl_cart_btn_order}</button>
    <button type="button" id="clear-cart" class="btn btn-danger">{$lang_data.tpl_cart_btn_clear}</button>
    {/if}
</div>