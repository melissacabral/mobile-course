/**
 * Contextual inputs - show only one field based on the user's preferred contact method
 */
$("select#select-choice-a").bind( "change", function(event, ui) {
    //get the value of the selection made
    var mySelection = $('select#select-choice-a').val();
    // alert(mySelection);
    //change CSS classes to show/hide based on selection
    switch(mySelection){
        case "email":
            $('.contextual').addClass('ui-hidden-accessible');
            $('.email').removeClass('ui-hidden-accessible');
        break;
        case "txt":
        case "call":
            $('.contextual').addClass('ui-hidden-accessible');
            $('.phone').removeClass('ui-hidden-accessible');
        break;
        case "snailmail":
            $('.contextual').addClass('ui-hidden-accessible');
            $('.address').removeClass('ui-hidden-accessible');
        break;

    };
   
});


