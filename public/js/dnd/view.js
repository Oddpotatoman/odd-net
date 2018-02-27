$('document').ready(function(){
    var $rows = $('#table-for-rolls tr');
    $('#tableSearch').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
});

function clickAutoRoll() {
    var count = $('#table-for-rolls tr').length;
    var $rows = $('#table-for-rolls tr');

    let randomNumber = Math.floor(Math.random()*count) +1;

    $('#tableSearch').val(randomNumber);

    var val = randomNumber;
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
}