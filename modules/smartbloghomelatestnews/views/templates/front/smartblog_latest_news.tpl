{if $page_name =='index'}
    <div class="img_menu clearfix">
        <ul>
            <li>
                <a href="{$base_dir}12-udilissha">
                    <span class="discr">Удилища</span>
                    <img src="{$img_dir}/udka1.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}21-katushki">
                    <span class="discr">Катушки</span>
                    <img src="{$img_dir}/spining.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}90-kryuchki">
                    <span class="discr">Крючки</span>
                    <img src="{$img_dir}/kryuk.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}95-leski-shnury">
                    <span class="discr">Лески, шнуры</span>
                    <img src="{$img_dir}/leska.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}28-karpovaya-lovlya">
                    <span class="discr">Карповая ловля</span>
                    <img src="{$img_dir}/karp_lovlya.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}65-fidernaya-lovlya">
                    <span class="discr">Фидерная ловля</span>
                    <img src="{$img_dir}/fider_lovlya.jpg" alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}44-spinningovaya-lovlya">
                    <span class="discr">Спиннинговая ловля</span>
                    <img src="{$img_dir}/spining_lovlya.jpg"  alt=""></a>
            </li>
            <li>
                <a href="{$base_dir}55-poplavochnaya-lovlya">
                    <span class="discr">Поплавочная ловля</span>
                    <img src="{$img_dir}/poplavok_lovlya.jpg" alt=""></a>
            </li>
        </ul>
    </div>
{/if}


<div class="article clearfix">
    <h3><a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='Статьи от DEN' mod='smartbloghomelatestnews'}<span>{l s='FISH' mod='smartbloghomelatestnews'}</span></a></h3>
    
        {if isset($view_data) AND !empty($view_data)}
            {assign var='i' value=1}
            <ul>
            {foreach from=$view_data item=post}
               
                    {assign var="options" value=null}
                    {$options.id_post = $post.id}
                    {$options.slug = $post.link_rewrite}
                    
                        <li class="article_box">
                           <img alt="{$post.title}" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg">                                             
                           <!-- <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title}</a>   -->                      
                               <div class="article_text">
                                {$post.short_description|truncate:220|escape:'htmlall':'UTF-8'}
                                </div>
                            <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" >{l s='Детальнее' mod='smartbloghomelatestnews'}</a>
                        </li>
                    
                {$i=$i+1}
            {/foreach}
            </ul>
        {/if}
    
</div>