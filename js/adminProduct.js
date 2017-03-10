$(document).ready(function(){
  var nameIn = document.getElementById("name");
  var priceIn = document.getElementById("price");
  var quantityIn = document.getElementById("quantity");
  var imageIn = document.getElementById("image");
  var addBut = document.getElementById("newProductAdmin");

  addBut.onclick = function(ev){
      $.ajax({
          url:"php/createProduct.php",
          type:"post",
          data:{
            img: imageIn.value,
            name: nameIn.value,
            quantity: quantityIn.value,
            price: priceIn.value
          },
          success:function(resp){
              console.log(resp);
          }
      });
    };
});
