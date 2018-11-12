
$(document).ready(function(){
    $("#add").click(
        function(){
        var value = $("#textfield").val();
        console.log("hello");
        $("#list").append('<li>'+ value +'</li>');
    });

});

