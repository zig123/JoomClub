var lsAdClass = new Class({
    Implements: Options,	
	
    options: {

    },
    toggle: function(id) {
        var obj=$('popup_adunits_form_'+id);
        
        var slideObj = new Fx.Slide(obj);
        if (obj.getStyle('display')=='none') {
            slideObj.hide();
            obj.setStyle('display','block');
        };
        slideObj.toggle();
    },
    
    del:function (id) {
	new Request.JSON({
	    url: aRouter['settings']+'adunits/ajaxdeleteadunits/',
	    noCache: true,
	    data: { adunitsid:id, security_ls_key: LIVESTREET_SECURITY_KEY },
	    onSuccess: function(result){
		if (!result) {
		    msgErrorBox.alert('Error','Please try again later');
		}
		if (result.bStateError) {
		    msgErrorBox.alert(result.sMsgTitle,result.sMsg);
		} else {
		    msgNoticeBox.alert(result.sMsgTitle,result.sMsg);
		    $('au_'+id).set('html','Удалено');
		    $('au_'+id).setStyle('background-color','#FFC6C6');
		}
	    },
	    onFailure: function(){
		msgErrorBox.alert('Error','Please try again later');
	    }
	}).send();

    },
    
    save:function (formObj) {
//	formObj = $('#adunits_form_'+formObj);
//	ls.ajax(aRouter['settings']+'adunits/ajaxupdadunits/',formObj.serializeJSON(),function(result) {
//	    if (result.bStateError) {
//		ls.msg.error(null, result.sMsg);
//	    } else {
//		ls.msg.notice(null, result.sMsg);
//		this.toggle(id);
//	    }
//	});
	var id=formObj;
	var thisObj=this;
	formObj=$('adunits_form_'+formObj);		
	var params=formObj.toQueryString();
	params=params+'&security_ls_key='+LIVESTREET_SECURITY_KEY;
	new Request.JSON({
	    url: aRouter['settings']+'adunits/ajaxupdadunits/',
	    noCache: true,
	    data: params,
	    onSuccess: function(result){
		if (!result) {
		    msgErrorBox.alert('Error','Please try again later');
		}
		if (result.bStateError) {
		    msgErrorBox.alert(result.sMsgTitle,result.sMsg);
		} else {
		    msgNoticeBox.alert(result.sMsgTitle,result.sMsg);
		    thisObj.toggle(id);
		}
	    },
	    onFailure: function(){
		msgErrorBox.alert('Error','Please try again later');
	    }
	}).send();
    }

});
var lsAdTree;

window.addEvent('domready', function() {  	
    lsAdTree = new lsAdClass();
});
