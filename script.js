$(document).ready(function(){
    $('.navbar .navmenu div.hum img').click(function(){
        var navbar =  document.querySelector(".navbar ul.navmenu li a").style.float

        if (navbar == "none"){
            $(".navbar ul.navmenu li a").css({"visibility" : "hidden",
            "float" : "right"
            });
            $(".navbar").css({"height" : "50px"});

        }

        else {
            $(".navbar ul.navmenu li a").css({"visibility" : "visible",
            "float" : "none",
            "margin-bottom" : "10px"
        });
            $(".navbar").css({"height" : "200px"});
        }
       
            

});
});
