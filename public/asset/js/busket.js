function addProduct(product) {
    console.log(product)
    if(product.associatedModel.price_promo != null){
        var price = product.associatedModel.price_promo * product.quantity
    }else{
        var price = product.price * product.quantity
    }
    $('.shopping-cart-container').append(`
    <div class="flex flex-row justify-between align-middle my-2 h-fit">
        <div class="flex flex-col justify-center align-middle m-1">
            <div style="width:70px; height:70px" class="overflow-hidden rounded-xl shadow flex flex-col justify-center align-middle"><img src="${$('#asset-image').val() + '/' + product.associatedModel.photo}" alt="${product}" class="w-full h-auto" onerror="this.onerror=null; this.src='${$('#empty-busket').val()}'"></div>
        </div>
        <div class="flex flex-col justify-center align-middle m-1">
            <div class="text-stone-900 text-bold">${product.name}</div>
            <div class="text-stone-400">${product.attributes}</div>
        </div>
        <div class="flex flex-col justify-center align-middle m-1">
            <p class="text-bone-500 font-bold">${price} zł</p>
        </div>
    </div>
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
                    <a href="${$('#url-busket').val()}" class="duration-200 block shadow h-full w-full text-bone-600 m-1 px-4 py-2 leading-loose text-center font-semibold bg-gray-50 hover:bg-bone-600 hover:text-bone-50 rounded-xl">Zobacz pełne podsumowanie</a>
                    <a href="${$('#url-order-create').val()}" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Przejdź do płatności</a>
                    <button onclick="
                    $('#shopping-cart-window').hide();
                    " type="button" class="btn-off text-white duration-200 block shadow h-full w-full m-1 px-4 py-2 leading-loose text-center font-semibold bg-emerald-500 hover:bg-white hover:text-emerald-500 rounded-xl">Kontynuuj zakupy</button>
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
                <a href="${$('#url-shop').val()}" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Przejdź do sklepu</a>
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
            <a href="${$('#url-shop').val()}" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Przejdź do sklepu</a>
        `);
        }
    });
}
$(document).ready(function () {
    var window = false;
    $('#shopping-cart').click(function () {
        if ($('#shopping-cart-window').is(':hidden')) {
            $('.shopping-cart-container').html('');
            $('#shopping-cart-window').show();
            addProducts();
            window = true;
        } else {
            $('#shopping-cart-window').hide();
            window = false;
        }
    });
    try {
        var busketShow = $('#busket-show').val();
    } catch (error) {
        var busketShow = null;
    }
    if (busketShow != null) {
        $('.shopping-cart-container').html('');
        $('#shopping-cart-window').show();
        addProducts();
        window = true;
    }
});