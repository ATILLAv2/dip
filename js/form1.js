$(document).ready(function () {

    $('form').submit(function (event) {

        event.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: 'php/order.php',
            data: new FormData(this),
            contentType:false,
            cashe: false,
            processData:false,

            success: function (data) {
                alert('Заказ оформлен');
            }
        });

    });

});