$(document).ready(function () {

    $('form').submit(function (event) {

        event.preventDefault();
        /* $.ajax({
            url: 'php/order.php',        
            method: 'post',           
            dataType: 'html',          
            data: {text: 'Текст'},     
            success: function(data){   
            alert('Заказ оформлен'); 
            }
        }); */
        $.ajax({
            method: 'post',
            url: 'php/order.php',
            data: new FormData(this),
            contentType:false,
            cashe: false,
            processData:false,

            success: function (data) {
                alert(data);
            }
        });

    });

});