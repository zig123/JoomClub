function insertLsUser(obj, event, key) {
	$('#talk_text').insertLs();
}

/*
	var txt = selectedText(obj);

	alert(txt);
*/


function selectedText(obj)
{
  if(obj.getSelection) txt = obj.getSelection().toString();
  else if(obj.getSelection) txt = obj.getSelection();                
  else if(obj.selection) txt = obj.selection.createRange().text;
 
  return txt;
}

$(document).ready(function() {

	$('form[id!=form_comment] .panel-form').remove();
	$('form[id!=form_comment] .panel_form').remove();
	
	setTimeout(function() {
		$("form[id!=form_comment] .markItUpHeader").remove();
		$("form[id!=form_comment] .markItUpFooter").remove();
	},12);

	if ($('#talk_text').attr('id') != undefined) {

		$('#talk_text').redactor({
			lang			: 'ru',
			focus			: true,
			removeStyles	: true,
			removeClasses	: false,
			convertDivs		: false,
			convertLinks	: true,
			imageUpload		: DIR_WEB_ROOT+'/imperavi/upload_img/',
			fileUpload		: DIR_WEB_ROOT+'/imperavi/upload_files/',
			buttons 		: ['html', '|', 'formatting', '|', 'bold', 'italic', 'deleted','underline', '|','unorderedlist', 'orderedlist', '|',
		  						'image', 'video', 'file', 'table', 'link', '|','horizontalrule']
		});

		$('#talk_text').execCommand('inserthtml','<p>&nbsp</p>');
	}	
});