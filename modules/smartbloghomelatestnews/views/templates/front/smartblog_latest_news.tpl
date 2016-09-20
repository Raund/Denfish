<div class="article">
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