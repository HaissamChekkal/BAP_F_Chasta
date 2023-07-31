function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}


/**
 * Display le menu responsive en fonction de la largeur de l'écran
 *
 * @returns {boolean}
 */
function displayMenuResponsive(){
    // Si le menu est affiché ou pas
    var toggle = $('#navbar-toggle').attr('data-toggle') == 'true';

    // Largeur du menu responsive
    var width = viewport().width > 768 ? '50%' : '100%';

    // Affiche le menu
    $('#aside').css('width',toggle ? width : '0%' );
    return toggle;
}

$('#navbar-toggle').on('click',function(){

    var toggle = $('#navbar-toggle').attr('data-toggle') == 'true';
    // Trigger le toggle
    $(this).attr('data-toggle',!toggle);
    displayMenuResponsive();
});


/**
 * Display le menu responsive en fonction de la largeur de l'écran
 *
 * @returns {boolean}
 */
function displayMenuHome(){
    // Si le menu est affiché ou pas
    var toggle = $('#toggle-nav-home').attr('data-toggle') == 'true';

    // Affiche le menu
    $('#nav-home').css('opacity',toggle ? 1 : 0 );
    $('#voile-home').css('opacity',toggle ? 1 : 0 );
    $('#logo-homepage').css('opacity',toggle ? 0 : 1 );
    return toggle;
}

$('#toggle-nav-home').on('click',function(){

    var toggle = $('#toggle-nav-home').attr('data-toggle') == 'true';
    // Trigger le toggle
    $(this).attr('data-toggle',!toggle);
    displayMenuHome();
});



function resize(){

    if(viewport().width < 768){
        $('.half-height').each(function(){
            if(!$(this).hasClass('no-height-mobile'))
                $(this).height(viewport().height/2);
            else
                $(this).height('auto');
        });
    }else {
        // Je set la taille des blocs
        $('.half-height').height(viewport().height / 2);
    }

    if(viewport().width>992){
        $('#navbar-toggle').attr('data-toggle',false);
        $('#aside').attr('style','');
        // Tablet
    }else {
        displayMenuResponsive();
        displayMenuHome();
    }


    // Menu home

    var menu = $('#nav-home');

    var navHeight = menu.height();
    menu.css('margin-top',(viewport().height - navHeight)/2);

}

// Menu footer
function onHover(){
    if(viewport().width > 768) {
        $('#menu-home').find('li').each(function () {
            if ($(this).attr('id') != 'logo-home')
                $(this).css('opacity', 1);
        });
        $('#voile-home').css('opacity', 1);
        $('#visions').css('opacity', 1)
    }
}

function offHover(){
    if(viewport().width > 768) {
        $('#menu-home').find('li').each(function () {
            if ($(this).attr('id') != 'logo-home')
                $(this).css('opacity', 0);
        });
        $('#voile-home').css('opacity', 0);
        $('#visions').css('opacity', 0);
    }
}

$('#menu-home').hover(onHover,offHover);

$(document).ready(resize());

$(window).resize(resize);