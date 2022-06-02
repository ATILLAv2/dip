$(document).ready(function () {

    
    document.getElementById('dataToday').valueAsDate = new Date();

    $('form').submit(function (event) {

        event.preventDefault();

        $.ajax({
            method: 'post',
            url: 'php/order.php',
            data: new FormData(this),
            contentType: false,
            cashe: false,
            processData: false,

            success: function (data) {
                    event.preventDefault();
                    $('#myOverlay').fadeIn(297, function(){
                      $('#myModal') 
                      .css('display', 'block')
                      .animate({opacity: 1}, 198);
                    });
                
                  $('#myModal__close, #myOverlay').click( function(){
                    $('#myModal').animate({opacity: 0}, 198,
                      function(){
                        $(this).css('display', 'none');
                        $('#myOverlay').fadeOut(297);
                    });
                  });
            }
        });

    });

    var allChbx = [],
        out = document.querySelector('.output');
        [].forEach.call(document.querySelectorAll('.checkbox_grid'), function (group) {
        var chbx = group.querySelectorAll('input[type=checkbox]:not(.main)');
        allChbx = allChbx.concat([].slice.call(chbx));
        [].forEach.call(chbx, function (el) {
            el.addEventListener('change', function () {
                var cnt = [].filter.call(chbx, function (el) {
                    return el.checked == true;
                }).length;
                reCalc();
            }, false);
        });
    });

    function reCalc() {
        var total = 0;
        allChbx.forEach(function (c) {
            total += c.checked == true ? +c.dataset.price : 0;
        });
        out.innerHTML = total;
        var price = $('.output').text();
        $('.inv_input').val(price);
    }

});