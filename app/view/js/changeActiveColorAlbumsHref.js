$(document).ready(function() {
    $('.album').on('click', function() {
        
        $('.album-active').removeClass('album-active');

        $(this).find('h2').addClass('album-active')
    })
})