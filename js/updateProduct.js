$(document).ready(function(){

  var nameIn = document.getElementById("nameEdit");
  var priceIn = document.getElementById("priceEdit");
  var quantityIn = document.getElementById("quantityEdit");
  var imageIn = document.getElementById("imageEdit");

$("#editproduct").hide();

  $(".updateBut").click(function(ev){
    $(".productsAdmin").hide();
    $(".productNew").hide();
    $("#editproduct").show();
    console.log("ok");


    });

    $("#newEditAdmin").click(function(ev){
      console.log("no");

      $.ajax({
          url:"php/updateProduct.php",
          type:"post",
          data:{
            edit_id:$(".updateBut").attr("id"),
            imgEdit: imageIn.value,
            nameEdit: nameIn.value,
            quantityEdit: quantityIn.value,
            priceEdit: priceIn.value
          },
          success:function(resp){
              console.log(resp);
              $("#editproducts").hide();

          }
      });
    });


});
