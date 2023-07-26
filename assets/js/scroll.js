$('#inicio').on('click', function(){
    $('html, body').animate( {scrollTop: 0}, 1000);
     // Inicio
    $('#inicio2').css("background","#df6666");
    $('#inicio2').css("color","white");
    $('#inicio2').css("border-radius","20px");
    // Acerca de
    $('#acercade2').css("background","none");
    $('#acercade2').css("color","#b7b7b7");
    // Mision y Vision
    $('#misionvision2').css("background","none");
    $('#misionvision2').css("color","#b7b7b7");
})

$('#acercade').on('click', function(){
    $('html, body').animate( {scrollTop: 500}, 1000);
    // Inicio 
    $('#inicio2').css("background","none");
    $('#inicio2').css("color","b7b7b7");
    // Acerca de
    $('#acercade2').css("background","#df6666");
    $('#acercade2').css("color","white");
    $('#acercade2').css("border-radius","20px");
    // Mision y Vision
    $('#misionvision2').css("background","none");
    $('#misionvision2').css("color","b7b7b7");
})

$('#misionvision').on('click', function(){
    $('html, body').animate( {scrollTop: 1000}, 1000);
    // Inicio
    $('#inicio2').css("background","none");
    $('#inicio2').css("color","#b7b7b7");
    // Acerca de
    $('#acercade2').css("background","none");
    $('#acercade2').css("color","#b7b7b7");
    // Mision y Vision
    $('#misionvision2').css("background","#df6666");
    $('#misionvision2').css("color","white");
    $('#misionvision2').css("border-radius","20px");
})