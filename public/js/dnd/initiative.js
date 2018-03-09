$('document').ready(function(){
    $('.tableSearch').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
});
function testClick(){
    $("#init-container").append("<div id=\"initiative\">\n" +
        "                <div class=\"form-group\">\n" +
        "                    <label for=\"tableName\">Table name</label>\n" +
        "                    <input type=\"text\" name=\"tableName\" class=\"form-control\" id=\"initiative-\" placeholder=\"Enter name\">\n" +
        "                </div>\n" +
        "            </div>");

}