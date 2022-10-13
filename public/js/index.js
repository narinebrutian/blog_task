alert('hello');
$(document).ready(function(){
   $('#signUpBtn').click(function () {
       $.ajax(
       {
           url: "",
           success: function(result){
                $("#div1").html(result);
           }
       });
   });
});
