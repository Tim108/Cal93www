$(function () {
    $('nav div a').click(function () {
        var $linkClicked = $(this).attr('href');
        $linkClicked = $linkClicked.replace(/^#/, '');
        console.log($linkClicked);

        $('nav div a').parent().removeClass('active');
        $('#' + $linkClicked + '-link').parent().addClass('active');

        document.location.hash = $linkClicked;
        $('#main-content').load('pages/' + $linkClicked + '.php');
    });

    //load page on refresh using link
    $(document).ready(function(){

        var hash = window.location.hash;
        hash = hash.replace(/^#/, '');
        switch (hash) {
            case 'corvee' :
                $('#' + hash + '-link').trigger('click');
                $('#' + hash + '-link').parent().addClass('active');
                console.log('loaded corvee');
                break;
            case 'page2' :
                $('#' + hash + '-link').trigger('click');
                break;
            case 'page3' :
                $('#' + hash + '-link').trigger('click');
                break;
            default :
                $('#' + 'home' + '-link').trigger('click');
                break;
        }

    });


});