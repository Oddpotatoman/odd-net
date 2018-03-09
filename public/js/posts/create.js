$('document').ready(function(){
    new SimpleMDE({ element: $("#content-Editor")[0],
        spellChecker: false,
        showIcons: ["table","code","horizontal-rule"],
    });
});