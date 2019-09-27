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


});
