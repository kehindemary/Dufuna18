$("#add").click(
    function(){
    var value = $("#textfield").val ();
    $("#list").append('<li>'+ value +'</li>');
});