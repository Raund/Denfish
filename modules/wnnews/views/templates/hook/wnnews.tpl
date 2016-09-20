<div class="advice" id="xAdvices">
    <h3>Советы от DEN<span>FISH</span></h3>
    {if $images}
        <div class="advice_block clearfix">
            {foreach from=$images item=image name=images}
                <div class="advice_text x-advice" style="display: none">
                    <i class="fa fa-info-circle fa-lg"></i>{$image.caption|strip_tags:'UTF-8'|truncate:205:'...'}
                </div>
            {/foreach}
            <ul class="adv">
                <li><img src="{$img_dir}more_adv.png" alt=""><a href="#" class="x-next-advice">Еще совет</a></li>
                <li><a href="{$news_dir}">Смотреть все</a></li>
            </ul>

        </div>
    {/if}
</div>
