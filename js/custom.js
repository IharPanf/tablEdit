jQuery(document).ready(function(){
    jQuery('table')
        .on('click',function(e){
            var clickedTD = jQuery(e.target);
            var tempValue = clickedTD.text();
            if (clickedTD.find('input').length < 1 && e.target.tagName == 'TD' && !$(e.target).hasClass('noclick'))  {
                clickedTD.text('')
                         .append("<input type='text' value='"+tempValue+"'>")
                         .find('input').focus();
            } else {
                if (clickedTD.find('input').length  > 0) {
                    tempValue = clickedTD.find('input').val();
                    clickedTD.remove('input').text(tempValue);
                }
            }
        })
        .on('focusout',function(e){
            var clickedTD = jQuery(e.target);
            clickedTD.parent().text(clickedTD.val());
        })
    jQuery('.btn-warning').on('click',function(e){
        $(e.target).parent().parent().remove();
    })
});

function addRow() {
    var countTR = jQuery('table').find('tr').length;
    jQuery('table').append("<tr><td class='noclick'>"+countTR+"</td>" +
                           "<td></td>" +
                           "<td></td>" +
                           "<td></td>" +
                           "<td class='noclick'>" +
                                "<button class='btn btn-warning'>Удалить</button>" +
                           "</td></tr>");
    jQuery('.btn-warning').on('click',function(e){
        $(e.target).parent().parent().remove();
    })
}