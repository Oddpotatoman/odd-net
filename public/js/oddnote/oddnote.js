/**
 * Created by oddandre on 27/04/2018.
 */
function saveLinkData() {
    var dataField = $("#textArea").val();
    var token = $('input[name=_token]').val();
    $.ajax({
        type: 'POST',
        url: "/oddnote/add",
        data: {text: dataField, _token: token},
        success: function (result) {
            console.log(result);
            $("#link_field_line").val("odd-net.net/oddnote/"+result);
            $('#text_field').hide();
            $('#link_field').show();
        }
    });
    return false;
}
function copyText() {
    var copyText = document.getElementById("link_field_line");

    copyText.select();

    document.execCommand("Copy");

    console.log("Copied the text to clipboard");
}