$(document).ready(function(){
      var amorHomo = document.getElementById("amorHomo");

    amorHomo.onclick = function(ev){
      $.ajax({
          url:"php/cart.php",
          type:"post",
          data:{
              username:$('#homo').attr('alt'),
              quantity:1,
          },
          success:function(resp){
              console.log(resp);
          }
      });
    };

    });
