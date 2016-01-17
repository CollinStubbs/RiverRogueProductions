$(function(){

    var current = $("#film_title").html();
    var current_desc = $("#film_desc").html();
    var rift = $("#film_title_1").html();
    var rift_desc = $("#film_desc_1").html();
    var opp = $("#film_title_2").html();
    var opp_desc = $("#film_desc_2").html();
    var rift2 = $("#film_title_3").html();
    var rift2_desc = $("#film_desc_3").html();
    
    var home = $("#home").html();
    var about = $("#about").html();
    var media = $("#media").html();
    var contact = $("#contact").html();
    
    $("#nav_title").click(function(){
        
        location.reload();
    });
    
     $("#about_btn").click(function(){
        $("#container").html(about);
    });
    
     $("#media_btn").click(function(){
        $("#container").html(media);
    });
    
    $("#contact_btn").click(function(){
        $("#container").html(contact);
    });
    
    $("#img_1").hover(function(){
        $("#film_title").html(rift);
        $("#film_desc").html(rift_desc);
    }, function(){
        $("#film_title").html(current);
        $("#film_desc").html(current_desc);
    });
    
     $("#img_2").hover(function(){
        $("#film_title").html(opp);
        $("#film_desc").html(opp_desc);
    }, function(){
        $("#film_title").html(current);
        $("#film_desc").html(current_desc);
    });

     $("#img_3").hover(function(){
        $("#film_title").html(rift2);
        $("#film_desc").html(rift2_desc);
    }, function(){
        $("#film_title").html(current);
        $("#film_desc").html(current_desc);
    });


});