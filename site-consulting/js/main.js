$( document ).ready(function() {

    $( ".cross" ).hide();
    $( ".menu-hamburger" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu-hamburger" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu-hamburger" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });

});