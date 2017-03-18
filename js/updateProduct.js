$(document).ready(function(){
$("#editproduct").hide();

  $(".updateBut").click(function(ev){
    $(".productsAdmin").hide();
    $(".productNew").hide();
    $("#editproduct").show();
    console.log("ok");


    });

    $(".newEditAdmin").click(function(ev){
      $(".productsAdmin").hide();
      $(".productNew").hide();
      $("#editproduct").show();

      /*$.ajax({
          url:"php/updateProduct.php",
          type:"post",
          data:{
            del_id:$(this).attr("id")
          },
          success:function(resp){
              console.log(resp);
              $("#productsAdmin").hide();

          }
      });*/
    });


});
