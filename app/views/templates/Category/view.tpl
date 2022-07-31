
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            {$data.breadcrumbs}
        </ol>
    </nav>
</div>

<div class="container py-3">
    <div class="row">
        {foreach $data.category as $category}
        <div class="col-lg-12 category-content">
            <h3 class="section-title">{$category->title}</h3>
            {if !empty($category->content)}
            <div class="category-desc">
                {$category->content}
            </div>
            {/if}
        {/foreach}
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
                {if !empty($data.products)}
                    {$this->getPart('parts/products_loop')}
                {else}
                    {$lang_data.category_view_no_products}
                {/if}

            </div>

            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {if $data.countPages > 1}
                           {$data.pagination}
                            {/if}
                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>
</div>
