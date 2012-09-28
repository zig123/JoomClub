function insertCut(obj, event, key) {
	$('#topic_text').execCommand('inserthtml', '<cut>===Читать далее===</cut><br/> <p></p>');
}

function insertLsUser(obj, event, key) {
	$('#topic_text').insertLs();
}

$(document).ready(function() {
	$('form[id!=form_comment] .panel-form').remove();
	$('form[id!=form_comment] .panel_form').remove();
	
	setTimeout(function() {
		$("form[id!=form_comment] .markItUpHeader").remove();
		$("form[id!=form_comment] .markItUpFooter").remove();
	},12);

	if ($('#topic_text').attr('id') != undefined) {

		$('#topic_text').redactor({
											lang			: 'ru',
											focus			: true,
											removeStyles	: true,
											removeClasses	: false,
											convertDivs		: false,
											convertLinks	: true,
											imageUpload		: DIR_WEB_ROOT+'/imperavi/upload_img/', 
											fileUpload		: DIR_WEB_ROOT+'/imperavi/upload_files/',
											buttons 		: ['html', '|', 'formatting', 'bold', 'italic', 'deleted','underline', 'unorderedlist', 'orderedlist',
																, 'outdent', 'indent',
		  														'image', 'video', 'file', 'table', 'link','fontcolor', 'backcolor',
		  														'alignleft', 'aligncenter', 'alignright', 'justify',
		  														'horizontalrule', 'smiles', 'fullscreen'],
											buttonsAdd		: ['|', 'cut', 'lsuser'],
											buttonsCustom	: {
												cut	: 	{
															title	: 'cut',
															callback: insertCut
												},
												lsuser	: 	{
															title	: 'Вставить юзера',
															callback: insertLsUser
												}
											}

		});

		$('#topic_text').execCommand('inserthtml','<p>&nbsp</p>');
	}	
});