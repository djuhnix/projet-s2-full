$(document).ready(function(){
    $(document).on("keydown", function(event) {
        if (event.which === 13) {
            $.get(
                "assets/php/lancement.php",
                //{param: 0},
                function (data) {
                    $('h4').text("Début du jeu");
                    //console.log(data);
                    $('body').append(data);
                },
                "HTML"
            );
        }
    })

});
