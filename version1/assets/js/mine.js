
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
    $('[data-toggle="popover"]').popover();
    
});

$(document).ready(function(){
  $("p").on({
    mouseenter: function(){
      $(this).css("background-color", "lightgray");
    },  
    mouseleave: function(){
      $(this).css("background-color", "lightblue");
    }, 
    click: function(){
      $(this).css("background-color", "yellow");
    }  
  });
});

$(document).ready(function(){
    $(".nav-link").on({
      mouseenter: function(){
        $(this).css("background-color", "lightblue");
      },  
      mouseleave: function(){
        $(this).css("background-color", "blue");
      } 
    //   click: function(){
    //     $(this).css("background-color", "yellow");
    //   }  
    });
  });

  $(document).ready(function(){
    $("#service").click(function(){
      $()
    })
  });
