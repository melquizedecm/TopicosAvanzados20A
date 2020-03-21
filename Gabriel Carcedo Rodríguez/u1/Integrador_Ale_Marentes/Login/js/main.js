/*
***********************************************
*source: main.js
*Description: Funcion para animar formulario
*Date: 25/February/2020
*Autor: Daniel Bacab Gonzalez
***********************************************
*/
$('.toggle').click(function(){

    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});