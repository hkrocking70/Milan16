$(document).ready(function(){

    $(window).load(function() {
        // Animate loader off screen
        //$(".se-pre-con").fadeOut("slow");;
    });

    //Open Gamebox
    $(".gamepoint span").bind('click',function(){
        $(".gamearena").load('temp.php',function(){
            $(".gamearena").show();
        });
        window.setTimeout(function(){
            $(".gamebox").css('z-index', 10).animate({opacity: 1},300);
        },301);
        
    });
    

    //Close GameBox
    $(".closeicon").bind('click',function(){
        $(".gamebox").animate({opacity: 0},300);
        window.setTimeout(function(){
            $(".gamebox").css('z-index', '-1');
            $(".gamearena").html("");
        },300)
    });


});