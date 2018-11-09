
$(document).ready(function(){
    $("#add").click(
        function(){
        var value = $("#textfield").val();
        console.log("hello");
        $("#list").append('<li>'+ value +'</li>');
    });

    
    console.log("hello");
});
function validateForm() {
    var textfield = document.regForm.textfield;
    if (textfield.value == "") {
    alert("Please input your Wish");
    textfield.focus();
    return false;
    }
}
