
    function validateForm() {
        var firstname = document.forms["regForm"]["firstname"];
        if (firstname.value == "") {
        alert("Please input your Firstname");
        firstname.focus();
        return false;
        }
        var lastname = document.forms["regForm"]["lastname"];
        if (lastname.value == "") {
        alert("Please input your Lastname");
        lastname.focus();
        return false;
        }
        
        var email = document.forms["regForm"]["email"];
        if (email.value == "") {
        alert("Please input your email address");
        email.focus();
        return false;
        }
        var password1 = document.regForm.password1;
        if (password1.value == "") {
        alert("Please input your Password");
        password1.focus();
        return false;
        }
        var confirmpassword = document.regForm.confirmpassword;
        if (confirmpassword.value == "") {
        alert("Please confirm your Password ");
        confirmpassword.focus();
        return false;
        }
        var phoneno = document.regForm.phoneno
        if (phoneno.value == "" || isNaN(phoneno.value)) {
        alert("Phone number should be numeric.");
        phoneno.focus();
        return false;
        }
        if (phoneno.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
             phoneno.focus();
        return false;
        }
        var gender = document.regForm.gender;
        if (gender.value == "") {
            alert("Please select your gender");
            return false;
            }
            
        var country = document.regForm.country;
        if (country.value == "0") {
        alert("Please select your country");
        return false;
        }
        return true;
        console.log("hello");
        }
    