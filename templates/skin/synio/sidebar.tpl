<div class="span3">
	<div class="search">
		<form class="search-header-form" id="search-header-form" action="{router page='search'}topics/">
			<input type="text" placeholder="{$aLang.search}" maxlength="255" name="q" class="input-text input-medium" style="margin-bottom: 0px">
			<input type="submit" value="Найти" title="{$aLang.search_submit}" class="input-submit btn btn-primary">
		</form>
	</div>

	{include file='blocks.tpl' group='right'}
</div>