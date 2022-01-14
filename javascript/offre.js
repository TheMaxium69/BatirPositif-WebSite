$(document).ready(function(){

    var $contenu = $('.contenu');
    var $onglet = $('.onglet');

    $onglet.click(activer);

    function activer(){
        var num = $(this).index();

        $(this)
            .addClass('actif')
            .siblings()
            .removeClass('actif');

        $contenu.eq(num)
            .addClass('actif')
            .siblings()
            .removeClass('actif');
    }
});