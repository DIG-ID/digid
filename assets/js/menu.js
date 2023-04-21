$(function() {
document.querySelector('.hamburguer-button').addEventListener('click', function () {
    document.querySelector('.animated-icon2').classList.toggle('open');
});
});

$(function() {
    $('.clickable').click(function() {
        var index = $(this).data('index');
        $('.services__overview-description').hide();
        $('.services__overview-description:eq(' + (index - 1) + ')').show();
    });
    });