$(document).ready(function(){

  $(".deleteBut").click(function(ev){
    console.log("ok");
      $.ajax({
          url:"php/deleteProduct.php",
          type:"post",
          data:{
            del_id:$(this).attr("id")
          },
          success:function(resp){
              console.log(resp);
          }
      });
    });
});
