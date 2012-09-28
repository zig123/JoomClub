var ls = ls || {};

ls.ad = (function ($) {

    this.toggle = function(id) {
	$("#popup_adunits_form_"+id).slideToggle("slow");
	$(this).toggleClass("active");
	return false;
    }

    this.del = function (id) {
	ls.ajax(aRouter['settings']+'adunits/ajaxdeleteadunits/',{
	    adunitsid:id
	},function(result) {
	    if (result.bStateError) {
		ls.msg.error(null, result.sMsg);
	    } else {
		ls.msg.notice(null, result.sMsg);
		$('#au_'+id).html('Удалено');
		$('#au_'+id).css('background','#FFC6C6');
	    }
	});
    }
    this.save = function (formObj) {
	var id =formObj;
	formObj = $('#adunits_form_'+formObj);
	ls.ajax(aRouter['settings']+'adunits/ajaxupdadunits/',formObj.serializeJSON(),function(result) {
	    if (result.bStateError) {
		ls.msg.error(null, result.sMsg);
	    } else {
		ls.msg.notice(null, result.sMsg);
		this.toggle(id);
	    }
	});
    }
    return this;
}).call(ls.ad || {},jQuery);