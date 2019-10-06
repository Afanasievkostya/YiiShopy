$(function () {

    $('.arrivals-card').click(function() {
        $(this).find('.card-face').css('display', 'none');
        $(this).find('.card-active').css('display', 'block');
        $(this).css('box-shadow', '2px 2px 10px 0 #ccc').css('outline', 'none')
    });

     $('.arrivals-card').focusin(function() {
        $(this).find('.card-face').css('display', 'none');
        $(this).find('.card-active').css('display', 'block');
        $(this).css('box-shadow', '2px 2px 10px 0 #ccc').css('outline', 'none')
    });

    $('.card-text--sales').click(function() {
        $(this).find('.text-muted__star').css('display', 'none');
        $(this).find('.text-muted__cart').css('display', 'block');

    });

    $('.card-text--sales').focusin(function() {
        $(this).find('.text-muted__star').css('display', 'none');
        $(this).find('.text-muted__cart').css('display', 'block');

    });

    // эфекты для size и color

    $('.arrivals-size input:checkbox').click(function() {

     if   ($(this).is(':checked')) {
         $('.arrivals-size input:checkbox').not(this).prop('checked', false);
         $(this).next().css('color', 'red');


     } else {
         $('.arrivals-size input:checkbox').next().css('color', '#000000');
        }

    });

     $('.arrivals-color input:checkbox').click(function() {

     if   ($(this).is(':checked')) {
         $('.arrivals-color input:checkbox').not(this).prop('checked', false);
         $(this).next().css('transform', 'scale(1.5)');

     } else {
         $('.arrivals-color input:checkbox').next().css('transform', 'scale(1)');
        }

    });

    $('#clickForm').click(function() {
        $('#cardForm').submit();
    });

    // вызываем аккордион

    $('.categories-sheps').dcAccordion({speed: 300});

    // gallereya

    $('.thumbnails a').click(function(){                                   // При нажатиина миниатюру
    var images = $(this).find('img');
    var imgSrc = images.attr('src');

    $(".big-image img").attr({ src: imgSrc });                         // Подменяем адрес большого изображения на адрес выбранного
    $(this).siblings('a').removeClass('active');                       // Удаляем класс .active со ссылки чтоб убрать рамку
    images.parent().addClass('active');                                // Добавляем класс .active на выбранную миниатюру
    return false;
  });

    // счётчик

 var i = $('.counter input').val();

    $('.next').click(function() {
        i++;
        $('.counter input').attr('value', i);
    });


     $('.rev').click(function() {
         i--;
         if (i > 0) {
        $('.counter input').attr('value', i);
         }
    });

    // корусель

    $('.carousel').carousel({interval: false})

// модальное окно

function showCart(cart) {
       $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    // показ корзины из navbar

    $('.top-cart').on('click', function (e) {
         e.preventDefault();
         $.ajax({
             url: '/cart/show',
             type: 'GET',
             success: function(res){
                 if(!res) alert('Ошибка!');
                 showCart(res);
             },
             error: function(){
                 alert('Error!');
             }
         });

    });

    // удаление конкретного тов. из корзины

    $('#cart .modal-body').on('click', '.del-item', function () {
      var id = $(this).data('id');
      $.ajax({
          url: '/cart/del-item',
          data: {id: id},
          type: 'GET',
          success: function(res){
              if(!res) alert('Ошибка!');
              showCart(res);
          },
          error: function(){
              alert('Error!');
          }
      });

    });


    // функция очистки корзины

      $('.clear-cart').on('click', function () {
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });

    // Cart

    $('.add-to-cart').on('click', function (e) {
         e.preventDefault();
         var id = $(this).data('id'), qty = $('#qty').val();
         $.ajax({
             url: '/cart/add',
             data: {id: id, qty: qty},
             type: 'GET',
             success: function(res){
                 if(!res) alert('Ошибка!');
                 showCart(res);
             },
             error: function(){
                 alert('Error!');
             }
         });
     });

    $('.cart-prace--text').html();



});
