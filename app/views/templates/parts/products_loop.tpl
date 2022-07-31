<section class="featured-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {if isset($lang_data.main_index_featured_products)}
                    <h3 class="section-title">{$lang_data.main_index_featured_products}</h3>
                {/if}
            </div>
            {foreach $data.products as $product}
                <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-tumb">
                            <a href="product/{$product->slug}"><img src="{PATH}{$product->img}" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="product/{$product->slug}">{$product->title}</a></h4>
                            <p>{$product->exerpt}</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    {if $product->old_price}
                                        <small>${$product->old_price}</small>
                                    {/if}
                                    ${$product->price}
                                </div>
                                <div class="product-links">
                                    <a class="add-to-cart" href="cart/add?id={$product->id}" data-id="{$product->id}">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>