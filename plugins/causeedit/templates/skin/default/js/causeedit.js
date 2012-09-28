
/* -------------------------------------------------------
 *
 *   LiveStreet (v.1.0)
 *   Plugin Cause Edit (v.0.1)
 *   Copyright © 2011 Bishovec Nikolay
 *
 * --------------------------------------------------------
 *
 *   Plugin Page: http://netlanc.net
 *   Contact e-mail: netlanc@yandex.ru
 *
 ---------------------------------------------------------
 */

function deleteCause(iTopicId, iNum, obj){
    ls.ajax(aRouter['cause'] + 'delete/', {
        'iTopicId':iTopicId,
        'iNum':iNum
    }, function (data) {
        if (data.bStateError) {
            ls.msg.error(data.sMsgTitle, data.sMsg);
        } else {
            ls.msg.notice(data.sMsgTitle, data.sMsg);
            $(obj).parent('li').remove();
        }
    });
}