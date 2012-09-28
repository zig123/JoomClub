{if !$noShowSystemMessage}
	{if $aMsgError}
			{foreach from=$aMsgError item=aMsg}
				<div class="alert fade in alert-error">
                  <button data-dismiss="alert" class="close">?</button>
					{if $aMsg.title!=''}
						<strong>{$aMsg.title}</strong>:
					{/if}
					{$aMsg.msg}
				</div>
			{/foreach}
	{/if}


	{if $aMsgNotice}
			{foreach from=$aMsgNotice item=aMsg}
				<div class="alert fade in">
					{if $aMsg.title!=''}
						<strong>{$aMsg.title}</strong>:
					{/if}
					{$aMsg.msg}
				</div>
			{/foreach}
	{/if}
{/if}