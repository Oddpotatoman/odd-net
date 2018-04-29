/**
 * Created by oddandre on 28/04/2018.
 */
function getLinkData(){
        var dataField = $("#link_field_line").val();
        var token = $('input[name=_token]').val();
        $.ajax({
            type: 'POST',
            url: "/oddnote/getlinkdata",
            data: {link: dataField, _token: token},
            success: function (result) {
                console.log(result);
                if(result == 'used') {
                    result = '404 data not found. Some wowser deleted all my temproary data, shit.'
                }
                $("#textArea").val(result);
                $('#text_field').show();
                $('#link_field').hide();
            }
        });
        return false;
}