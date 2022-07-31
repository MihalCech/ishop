<div class="dropdown d-inline-block">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
        <img src="{PATH}/assets/img/{$App::$app->getProperty('language')->code}.png" alt="">
    </a>
    <ul class="dropdown-menu" id="languages">
        {foreach $lang->languages as $k => $v}
            {if $App::$app->getProperty('language')->code == $k}
                {continue}
            {/if}
        <li>
            <button class="dropdown-item" data-langcode="{$k}">
                <img src="{PATH}/assets/img/{$k}.png" alt="">
                {$v->title}</button>
        </li>
        {/foreach}
    </ul>
</div>
{*include file='widgets/lang_tree.tpl' object=$lang*}
