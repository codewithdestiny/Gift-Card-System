$(function(e) {
  

  $(".showMenuBtn").click(function(){

    $("#allMenu").removeClass("hidden");

  })

  $(".hideMenuBtn").click(function() {

    $("#allMenu").addClass("hidden");

  })

})




$(function(e){

  function loadDefault(){
      $("#gift-card-form-select").change(function (e) {
          var category = $("#category").val();
          var value = $(this).val();
              $.get("fetch_gift_card.php", {search: value, categorySearch: category}, function(data){
                 $('#country').html(data);
              })
         })
  }

  loadDefault();
 $("#gift-card-form-select").change(function (e) {
  var category = $("#category").val();
  var value = $(this).val();
      $.get("fetch_gift_card.php", {search: value, categorySearch: category}, function(data){

         $('#country').html(data);
      })
 })
})