<div class="bootstrap">
	<nav id="{if $employee->bo_menu}nav-sidebar{else}nav-topbar{/if}" role="navigation">
		{if !$tab}
			<div class="mainsubtablist" style="display:none;"></div>
		{/if}
		<ul class="menu">
			<li class="searchtab">
				{include file="search_form.tpl" id="header_search" show_clear_btn=1}
			</li>

			{*if count($quick_access) > 0}
				<li id="header_quick" class="maintab has_submenu">
					<a href="#" id="quick_select" class="title">
						<i class="icon-AdminFlash"></i>
						<span>{l s='Quick Access'}</span>
					</a>
					<ul class="submenu">
					{foreach $quick_access as $quick}
						<li>
							<a href="{$quick.link|escape:'html':'UTF-8'}" {if $quick.new_window} onclick="return !window.open(this.href);"{/if}>{$quick.name}</a>
						</li>
					{/foreach}
					</ul>
				</li>
			{/if*}

			{foreach $tabs as $t}
				{if $t.active}
				<li class="maintab {if $t.current}active{/if} {if $t.sub_tabs|@count}has_submenu{/if}" id="maintab-{$t.class_name}" data-submenu="{$t.id_tab}">
					<a href="{if $t.sub_tabs|@count && isset($t.sub_tabs[0].href)}{$t.sub_tabs[0].href|escape:'html':'UTF-8'}{else}{$t.href|escape:'html':'UTF-8'}{/if}" class="title" >
						<i class="icon-{$t.class_name}"></i>
						<span>{if $t.name eq ''}{$t.class_name|escape:'html':'UTF-8'}{else}{$t.name|escape:'html':'UTF-8'}{/if}</span>
					</a>
					{if $t.sub_tabs|@count}
						<ul class="submenu">
						{foreach from=$t.sub_tabs item=t2}
							{if $t2.active}
							<li id="subtab-{$t2.class_name|escape:'html':'UTF-8'}" {if $t2.current} class="active"{/if}>
								<a href="{$t2.href|escape:'html':'UTF-8'}">
									{if $t2.name eq ''}{$t2.class_name|escape:'html':'UTF-8'}{else}{$t2.name|escape:'html':'UTF-8'}{/if}
								</a>
							</li>
							{/if}
						{/foreach}
						</ul>
					{/if}
				</li>
				{/if}
			{/foreach}
            <li class="maintab">
                <a href="{$base_dir}/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=wnnews&tab_module=others&module_name=wnnews" class="title" >
                    <i class="icon-advice"></i>
                    <span>Советы от Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="{$base_dir}/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=azgallery&tab_module=front_office_features&module_name=azgallery" class="title" >
                    <i class="icon-gallery"></i>
                    <span>Фотогалерея Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="{$base_dir}/admin6912/index.php?controller=AdminBlogPost&token=fc3f2be1ec606cad71a3d79ae6d99c4b" class="title"  >
                    <i class="icon-article"></i>
                    <span>Статьи Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="{$base_dir}/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=homeslider&tab_module=front_office_features&module_name=homeslider" class="title"  >
                    <i class="icon-gallery"></i>
                    <span>Редактор слайдера</span>
                </a>
            </li>
			<li class="maintab">
				<a href="{$base_dir}/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=blockcontact&tab_module=front_office_features&module_name=blockcontact" class="title"  >
					<i class="icon-article"></i>
					<span>Редактор контактных телефонов</span>
				</a>
			</li>
			<li class="maintab">
				<a href="{$base_dir}/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=blocklayered&tab_module=front_office_features&module_name=blocklayered" class="title"  >
					<i class="icon-article"></i>
					<span>Редактор фильтров</span>
				</a>
			</li>

		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>
	</nav>
</div>