/*
(function(){



})();
*/
$(document).ready(function(){

  // jQuery methods go here...
    $(document).on("keydown", function(event){
        if (event.which == 37){
            $.post(
                "assets/php/deplacements.php",
                { prems: 0 },
                function (data) {
                    $('#main').append(data);
                },
                "HTML"
            );
        }

        if ( event.which == 38 ){
            $.post(
                "assets/php/deplacements.php",
                { prems: 1 },
                function (data) {
                    $('#main').append(data);
                },
                "HTML"
            );
        }
        if ( event.which == 39 ){
            $.post(
                "assets/php/deplacements.php",
                { prems: 2 },
                function (data) {
                    $('#main').append(data);
                },
                "HTML"
            );
        }

        if ( event.which == 40) {
            $.post(
                "assets/php/deplacements.php",
                { prems: 3 },
                function (data) {
                    $("#main").append(data);
                    console.log(data);
                },
                "HTML"
            );
        }
    });
});
