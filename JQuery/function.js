/*
        
    */
$(document).ready(function () {
  $("#btn1").click(function () {
    $("p:odd").hide(3000);
  });

  $("#btn2").click(function () {
    $("p:odd").show(3000);
  });
});
