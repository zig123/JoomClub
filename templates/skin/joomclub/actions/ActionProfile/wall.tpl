{assign var="oSession" value=$oUserProfile->getSession()}
{assign var="oVote" value=$oUserProfile->getVote()}


<script type="text/javascript">
	ls.wall.init({
		login:'{$oUserProfile->getLogin()}'
	});
	
	jQuery(document).ready(function($){
		$("textarea").charCount({
			allowed: 500,
			warning: 0
		});
	});
</script>

{if $oUserCurrent}
	<form class="wall-submit">
		<textarea rows="4" id="wall-text" class="input-text input-width-full js-wall-reply-parent-text span11"></textarea>

		<button type="button" onclick="ls.wall.add(jQuery('#wall-text').val(),0);" class="btn btn-primary js-button-wall-submit">{$aLang.wall_add_submit}</button>
	</form>
{else}
	<div class="wall-note">
		<h3>{$aLang.wall_add_quest}</h3>
	</div>
{/if}

<div id="wall-container" class="wall">
	{include file='actions/ActionProfile/wall_items.tpl'}
</div>

{if $iCountWall-count($aWall)}
	<a href="#" onclick="return ls.wall.loadNext();" id="wall-button-next" class="stream-get-more"><span class="wall-more-inner">{$aLang.wall_load_more} (<span id="wall-count-next">{$iCountWall-count($aWall)}</span>)</span></a>
{/if}

