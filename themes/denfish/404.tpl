<div class="pagenotfound">
	<div class="img-404">
    	<img src="{$img_dir}/img-404.png" alt="{l s='Page not found'}" />
    </div>
	<h1>{l s='Извините! Но данная страница сейчас недоступна. Попробуйте позже.'}</h1>

	<h3>{l s='Что бы найти товар введите его имя в форме поиска ниже'}</h3>
	<form action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="post">
		<input id="search_query" name="search_query" type="text"/>
        <button type="submit" name="Submit" value="OK" id="btn_notfound"><span>{l s='Ok'}</span></button>
	</form>

	<a class="on_start" href="{$base_dir}" title="{l s='На главную'}">{l s='На Главную'}</a>
</div>
