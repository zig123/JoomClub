<div class="user_link {$position}">
    <a href="http://{$link.link}">
        {if $link.is_image==0}
            {$link.text_img}
        {else}
             <img src="http://{$link.text_img}" alt="" />
        {/if}
    </a>
</div>