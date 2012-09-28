<p>
    <label>
        {$aLang.plugin.userads.userads_title}:
        <small class="note">
        {$aLang.plugin.userads.userads_desc}
        </small>
    </label>
{foreach $positions as $pos}
<div class="controls span12">
    <h4>
        {$aLang.plugin.userads.userads_link_title} "{$pos}":
    </h4>
    <div class="controls span1">
        <label for="is_image_{$pos}">{$aLang.plugin.userads.userads_is_image}</label>
        <input type="checkbox" id="is_image_{$pos}" name="userads[is_image][{$pos}]"
               class="checkbox"
               {if $aLinks.is_image.$pos==1}checked{/if}
               value="1"
                />
    </div>
    <div class="controls span5">
        <label for="link_{$pos}">{$aLang.plugin.userads.userads_link}</label>
        <input type="text" id="link_{$pos}" name="userads[link][{$pos}]" value="{$aLinks.link.$pos}" class="span12"/>
    </div>
    <div class="controls span5">
        <label for="text_img_{$pos}">{$aLang.plugin.userads.userads_text_img}</label>
        <input type="text" id="text_img_{$pos}" name="userads[text_img][{$pos}]" value="{$aLinks.text_img.$pos}"
               class="span12"/>
    </div>
</div>
{/foreach}
</p>
<div style="clear:both;"></div>
