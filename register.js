$(document).ready(function(){
    $("#show-password").on("click", function(){
        if($("#password").attr("type") == "password"){
            $("#password").attr("type", "text");
            $(this).text("Hide Password");
        }
        else{
            $("#password").attr("type", "password");
            $(this).text("Show Password");
        }
    });
});