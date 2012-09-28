<div class="modal fade" id="window_upload_img" data-target="#window_upload_img" class="modal modal-image-upload">
  <div class="modal-header">
    <h3>{$aLang.uploadimg}</h3>
  </div>

	<div class="modal-body">
		<form method="POST" action="" enctype="multipart/form-data" id="block_upload_img_content_link" onsubmit="return false;" style="display: none;" class="tab-content js-block-upload-img-content" data-type="link">
			<p><label for="img_file">{$aLang.uploadimg_url}:</label>
			<input type="text" name="img_url" id="img_url" value="http://" class="input-text input-width-full" /></p>

			<p>
				<label for="form-image-url-align">{$aLang.uploadimg_align}:</label>
				<select name="align" id="form-image-url-align" class="input-width-full">
					<option value="">{$aLang.uploadimg_align_no}</option>
					<option value="left">{$aLang.uploadimg_align_left}</option>
					<option value="right">{$aLang.uploadimg_align_right}</option>
					<option value="center">{$aLang.uploadimg_align_center}</option>
				</select>
			</p>

			<p><label for="form-image-url-title">{$aLang.uploadimg_title}:</label>
				<input type="text" name="title" id="form-image-url-title" value="" class="input-text input-width-full" /></p>

			{hook run="uploadimg_link_additional"}

			<button type="submit"  class="button button-primary" onclick="ls.topic.insertImageToEditor(jQuery('#img_url').val(),jQuery('#form-image-url-align').val(),jQuery('#form-image-url-title').val());">{$aLang.uploadimg_link_submit_paste}</button>
			{$aLang.or}
			<button type="submit"  class="button button-primary" onclick="ls.ajaxUploadImg('block_upload_img_content_link','{$sToLoad}');">{$aLang.uploadimg_link_submit_load}</button>
			<button type="submit"  class="button jqmClose">{$aLang.uploadimg_cancel}</button>
		</form>
	</div>

  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
	