$(document).ready(function(){
    if (event.which == 13){
        $.post(
            "assets/php/lancement.php",
            { param: 0 },
            function (data) {
                $('h4').text("Début du jeux");
            },
            "HTML"
        );
    }

});