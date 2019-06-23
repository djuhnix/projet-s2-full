/*
(function(){



})();
*/
$(document).ready(function()
{
if ($x % 64 == 1)
{
    if($x > $precX)
    {
        $.post(
            "assets/php/deplacements.php",
            { x: 1,y =0 },
            function (data)
            {
                $('#main').append(data);
            },
            "HTML"
        );
    }
    else{
        $.post(
            "assets/php/deplacements.php",
            { x: -1,y =0 },
            function (data)
            {
                $('#main').append(data);
            },
            "HTML"
        );
    }
    }

    if ($y % 64 == 1)
    {
        if($y > $precY)
        {
            $.post(
                "assets/php/deplacements.php",
                { x: 0,y =1 },
                function (data)
                {
                    $('#main').append(data);
                },
                "HTML"
            );
        }
        else{
            $.post(
                "assets/php/deplacements.php",
                { x: 0,y = -1 },
                function (data)
                {
                    $('#main').append(data);
                },
                "HTML"
            );
        }
    }
}
  // jQuery methods go here...
    /*$(document).on("keydown", function(event){
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
*/