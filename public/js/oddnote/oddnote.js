/**
 * Created by oddandre on 27/04/2018.
 */
var openid = generateId();
function saveLinkData() {
    var pass = openid;
    var dataField = hashId(pass);
    var textField = encryptMessage(pass)
    var token = $('input[name=_token]').val();
    $.ajax({
        type: 'POST',
        url: "/oddnote/add",
        data: {text: textField,id: dataField, _token: token},
        success: function (result) {
            console.log(openid);
            $("#link_field_line").val("odd-net.net/oddnote/"+openid);
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
function hashId(){
    console.log('hashingId')
    var unused = "used";
    while (unused == "used") {
        openid = generateId();
        var bitArray = sjcl.hash.sha256.hash(openid);
        var digest_sha256 = sjcl.codec.hex.fromBits(bitArray);
        unused = checkExistance(digest_sha256);
    }
    return digest_sha256;
}
function checkExistance(hash){
    console.log('checking existance');
    var token = $('input[name=_token]').val();
    $.ajax({
        type: 'POST',
        url: "/oddnote/check_id",
        data: {id: hash, _token: token},
        success: function (result) {
            if (result == true){
                return true;
            } else {
                return false;
            }
        }
    });
}
function encryptMessage(pass){
    console.log('Encrypting message');
    var content = $("#textArea").val();
    return sjcl.encrypt(pass, content);

}
function generateId(){
    console.log('Generating id');
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 10; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    console.log(text);
    return text;
}