{if isset($categories) && $categories}
    {foreach from=$categories key=category_id item=category}
    <div class="x-manufacturer-prouct-list">
        <div class="rozd clearfix">
            <span>{$category.name}</span>
            {if $category.count > 4}
                <a href="#" class="show_all x-show-all">Показать все</a>
            {/if}
        </div>
            {include file="./product-list.tpl" products=$category.products}
        <div style="clear: both"></div>
    </div>
    {/foreach}
{/if}
<STYLE>
    .x-manufacturer-prouct-list{
        margin-bottom: 30px;
    }
    .x-manufacturer-prouct-list ul.product_list li{
        display: none;
    }
    .x-manufacturer-prouct-list ul.product_list li:nth-child(1),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(2),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(3),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(4){
        display: block;
    }
    .x-manufacturer-prouct-list.x-all ul.product_list li{
        display: block;
    }
    .x-manufacturer-prouct-list ul.product_list{
        padding-top: 0;
    }
</STYLE>
<SCRIPT>
$(function(){

    $('.x-manufacturer-prouct-list .x-show-all').on('click', function(e){
        e.preventDefault();
        $('.x-manufacturer-prouct-list').removeClass('x-all');
        $('.x-manufacturer-prouct-list .x-show-all').show();
        $(this).hide();
        $(this).parents('.x-manufacturer-prouct-list').addClass('x-all');
        return false;
    });
});
</SCRIPT>