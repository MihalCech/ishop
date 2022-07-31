<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
           {$data.breadcrumbs}
        </ol>
    </nav>
</div>


<div class="container py-3">
    <div class="row">

        <div class="col-md-4 order-md-2">
            <h1>{$data.product[$data.id].title}</h1>

            <ul class="list-unstyled">
                <li><i class="fas fa-check text-success"></i> В наличии</li>
                <li><i class="fas fa-shipping-fast text-muted"></i> Ожидается</li>
                <li><i class="fas fa-hand-holding-usd"></i> <span class="product-price">
                        {if $data.product[$data.id].old_price}
                        <small>${$data.product[$data.id].old_price}</small>
                        {/if}
                    ${$data.product[$data.id].price}</li>
            </ul>

            <div id="product">
                <div class="input-group mb-3">
                    <input id="input-quantity" type="text" class="form-control" name="quantity" value="1">
                    <button class="btn btn-danger add-to-cart" type="button" data-id="{$data.product[$data.id].id}">{$lang_data.product_view_by}</button>
                </div>
            </div>

        </div>

        <div class="col-md-8 order-md-1">

            <ul class="thumbnails list-unstyled clearfix">
                <li class="thumb-main text-center">
                    <a class="thumbnail" href="{$data.product[$data.id].img}" data-effect="mfp-zoom-in">
                        <img src="{PATH}{$data.product[$data.id].img}" alt="">
                    </a>
                </li>
                {if !empty($data.gallery)}
                {foreach $data.gallery as $row}
                <li class="thumb-additional">
                    <a class="thumbnail" href="{$row->img}" data-effect="mfp-zoom-in">
                        <img src="{$row->img}" alt="">
                    </a>
                </li>
                {/foreach}
                {/if}
            </ul>

            {$data.product[$data.id].content}


        </div>

    </div>
</div>