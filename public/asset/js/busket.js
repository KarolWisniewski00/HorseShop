$(document).ready(function() {
    var window = false;
    $('#shopping-cart').click(function() {
        if (window == false) {
            $('#shopping-cart-window').show();
            window = true;
        } else {
            $('#shopping-cart-window').hide();
            window = false;
        }
    });
});