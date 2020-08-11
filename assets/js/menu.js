var isActive = false;

$('.header-menu').click(() => {
    if (!isActive)
        $('.header nav').css('display', 'flex');
    else
        $('.header nav').css('display', 'none');
    isActive = !isActive;
});