<div class="search_form" style="display:none">
    <!-- Block search module -->
    <div id="search_block_left" class="block exclusive">
        <!--<p class="title_block">{l s='Search' mod='blocksearch'}</p>-->
        <form method="get" action="{$link->getPageLink('search', true)|escape:'html':'UTF-8'}" id="searchbox">
            <!--<label for="search_query_block">{l s='Search products:' mod='blocksearch'}</label>
            <p class="block_content clearfix">-->
                <input type="hidden" name="orderby" value="position" placeholder="Поиск по каталогу товаров"/>
                <input type="hidden" name="controller" value="search" />
                <input type="hidden" name="orderway" value="desc" placeholder="Поиск по каталогу товаров"/>
                <input class="search_query form-control grey" type="text" id="search_query_block" name="search_query" 

                onblur="this.value=(this.value=='')?this.title:this.value;"
             onfocus="this.value=(this.value==this.title)?'':this.value;"
             value="Поиск по каталогу товаров"
             title="Поиск по каталогу товаров" />
                
                <button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="fa fa-search fa-2x"></i></span></button>
            <!--</p>-->
            <hr>
        </form>
    </div>
<!-- /Block search module -->
</div>



