$(document).ready(function(){

  $(".add_button").click(function(){
    $(".add_layout").css("display","block");
    $(".removePet").css("display","none");
  });

  $(".remove_button").click(function(){
    $(".removePet").css("display","block");
    $(".add_layout").css("display","none");
  });

});
