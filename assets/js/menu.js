$(function() {
document.querySelector('.hamburguer-button').addEventListener('click', function () {
    document.querySelector('.animated-icon2').classList.toggle('open');
});
});

$(function() {
    $('.clickable').on('click', function() {
        var index = $(this).data('index');
        $('.services__overview-description').removeClass('active').hide();
        $('.services__overview-description:eq(' + (index - 0) + ')').addClass('active').show();
        $('.clickable').removeClass('active');
        $(this).addClass('active');
    });
    });