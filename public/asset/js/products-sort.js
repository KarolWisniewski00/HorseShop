$(document).ready(function() {
    $("#menu-button").click(function() {
        $("#dropdown-menu").toggle();
    });

    // Sortowanie względem ceny rosnąco
    $("#menu-item-0").click(function() {
        sortProductsAscending();
    });

    // Sortowanie względem ceny rosnąco
    $("#menu-item-1").click(function() {
        sortProductsAscending();
    });

    // Sortowanie względem ceny malejąco
    $("#menu-item-2").click(function() {
        sortProductsDescending();
    });

    // Jeśli użytkownik kliknie gdzieś poza menu, ukryj menu
    $(document).click(function(event) {
        if (!$(event.target).closest("#menu-button").length) {
            $("#dropdown-menu").hide();
        }
    });
});

// Funkcja sortująca produkty względem ceny rosnąco
function sortProductsAscending() {
    var products = $(".product-small");
    products.sort(function(a, b) {
        var priceA = parseFloat($(a).find(".product-price").text());
        var priceB = parseFloat($(b).find(".product-price").text());
        return priceA - priceB;
    });

    $("#grid").html(products);
}

// Funkcja sortująca produkty względem ceny malejąco
function sortProductsDescending() {
    var products = $(".product-small");
    products.sort(function(a, b) {
        var priceA = parseFloat($(a).find(".product-price").text());
        var priceB = parseFloat($(b).find(".product-price").text());
        return priceB - priceA;
    });

    $("#grid").html(products);
}