function addProduct(product) {
    $('.shopping-cart-container').append(`${product.name}${product.attributes}${product.price}
    `);
}
function addProducts() {
    emptyPath = $('#empty-busket').val()
    $.ajax({
        type: 'GET',
        url: $('#url-get').val(),
        success: function (data) {
            console.log('ok.');
            if (Object.keys(data).length > 0) {
                for (const key in data) {
                    const product = data[key];
                    addProduct(product);
                    $('.shopping-cart-buttons').html(`
                    <a href="" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Zobacz pełne podsumowanie</a>
                    <a href="" class="duration-200 block shadow h-full w-full text-bone-600 m-1 px-4 py-2 leading-loose text-center font-semibold bg-gray-50 hover:bg-bone-600 hover:text-bone-50 rounded-xl">Przejdź do płatności</a>
                    `);
                }
            } else {
                $('.shopping-cart-container').append(`
                <div class="flex flex-col justify-center align-middle text-center h-full">
                    <img style="max-height:10vh;" class="h-auto max-w-full" alt="" src="${emptyPath}">
                    <div class="h4 m-0 p-0 my-3 leading-loose font-semibold">Twój koszyk jest pusty!</div>
                </div>
                `);
                $('.shopping-cart-buttons').html(`
                <a href="" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Przejdź do sklepu</a>
            `);
            }
        },
        error: function () {
            console.log('Wystąpił błąd podczas pobierania koszyka.');
            $('.shopping-cart-container').append(`
            <div class="flex flex-col justify-center align-middle text-center h-full">
                <img style="max-height:10vh;" class="h-auto max-w-full" alt="" src="${emptyPath}">
                <div class="h4 m-0 p-0 my-3 leading-loose font-semibold">Twój koszyk jest pusty!</div>
            </div>
            `);
            $('.shopping-cart-buttons').html(`
            <a href="" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Przejdź do sklepu</a>
        `);
        }
    });
}
$(document).ready(function () {
    var window = false;
    $('#shopping-cart').click(function () {
        if (window == false) {
            $('.shopping-cart-container').html('');
            $('#shopping-cart-window').show();
            addProducts();
            window = true;
        } else {
            $('#shopping-cart-window').hide();
            window = false;
        }
    });
});