$(document).ready(function(){
  $("#newProductAdmin").click(function(ev){
    console.log("k");
      $.ajax({
          url:"php/createProduct.php",
          type:"post",
          data:{
              name: $("#name").val(),
              quantity: $("#quantity").val(),
              price: $("#price").val()
          },
          success:function(resp){
              console.log(resp);
          }
      });
    });
});
