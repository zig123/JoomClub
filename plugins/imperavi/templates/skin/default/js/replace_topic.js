function insertCut(obj, event, key) {
	$('#topic_text').execCommand('inserthtml', '<cut></cut><p></p>');
}

function insertLsUser(obj, event, key) {
	$('#topic_text').insertLs();
}
function insertCode(obj, event, key) {
    var text = $('#topic_text').getSelected();
    if(text == ''){
        text = 'Код';
    }
    $('#topic_text').execCommand('inserthtml','<code>'+text+'</code>');
}

function insertQuote(obj, event, key) {
    var text = $('#topic_text').getSelected();
    if(text == ''){
        text = 'Цитата';
    }
    $('#topic_text').execCommand('inserthtml','<blockquote>'+text+'</blockquote>');
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
			focus			: false,
			autoresize: false,
			wym: true,
			imageGetJson    : DIR_WEB_ROOT+'/imperavi/json_load_img/',
			removeStyles	: true,
			removeClasses	: false,
			convertDivs		: false,
			convertLinks	: true,
			imageUpload		: DIR_WEB_ROOT+'/imperavi/upload_img/',
			fileUpload		: DIR_WEB_ROOT+'/imperavi/upload_files/',
			buttons 		: ['html', '|', 'formatting', 'bold', 'italic', 'deleted','underline',
                                '|','unorderedlist', 'orderedlist',  'outdent', 'indent','|',
		  						'image', 'video', 'file', '|', 'table', 'link','fontcolor',
		  						'alignleft', 'aligncenter', 'alignright', 'justify',
		  						'horizontalrule', 'smiles'],
			buttonsAdd		: ['|', 'cut', 'lsuser', 'code', 'quote', 'spoiler'],
			buttonsCustom	: {
				cut	: 	{
							title	: 'Вставить разрыв страницы',
							callback: insertCut
				},
				lsuser	: 	{
							title	: 'Вставить ник',
							callback: insertLsUser
				},
				code	: 	{
							title	: 'Вставить код',
							callback: insertCode
				},
				quote	: 	{
							title	: 'Вставить цитату',
							callback: insertQuote
				},
				spoiler :   {
				            title   : 'Вставить спойлер',
							func: 'insertSpoiler'
				}
			}

		});

		$('#topic_text').execCommand('inserthtml','<p>&nbsp</p>');
	}	
});