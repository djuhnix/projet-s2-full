/*
(function(){

    

})();
*/
$(document).ready(function(){

  // jQuery methods go here...
    $("#p").append("<p>").text("Hello");
    $(document).on("keydown", function(event){
        if (event.which == 37 || event.which == 38 || event.which == 39 || event.which == 40) {
            var uneVar = "truc";
            console.log("ICI");
            $.post(
                "test.php",
                { prems: uneVar },
                function (data) {
                    $('#main').append(data);
                },
                "HTML"
            );
        }
    });
});