$(document).ready(function(){
    var img = new Image();
    img.src = "assets/map/tiles.png";
    var ctx = document.getElementById('main').getContext('2d');
    img.onload = function(){
        ctx.drawImage(img,
            (1 - 1) * 64,
            0,
            64,
            64,
            0 * 64,
            0 * 64,
            64,
            64
        );
    };

    img.onload = function(){
        ctx.drawImage(img,
            ( 3 - 1) * 64,
            0,
            64,
            64,
            0 * 64,
            1 * 64,
            64,
            64
        );
    };

});