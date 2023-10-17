$(document).ready(function() {
    $('.add-image-button').on('click', function() {
        let image_block = $('.add-image-block');

        if(image_block.hasClass('d-none')) {
            image_block.removeClass('d-none').addClass('d-block');
        } else {
            image_block.removeClass('d-block').addClass('d-none');
        }
    })

    $('.close-add-image-block').find('i').on('click', function() {

        $('.add-image-block').removeClass('d-block').addClass('d-none');
    })
})