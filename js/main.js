$(document).ready(function() {

    //Scroll arriva de la web
    $('.subir').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: 0
        }, 900);

        return false;
    });
});

