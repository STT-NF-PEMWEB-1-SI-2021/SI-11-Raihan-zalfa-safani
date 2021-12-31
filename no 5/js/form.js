function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var name = document.Form.name.value;
    var email = document.Form.email.value;
    var country = document.Form.country.value;
    var gender = document.Form.gender.value;
    

    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    

    if(name == "") {
        printError("nameErr", "Please enter your name");
        var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Maximum 30 characters");
            var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("nameErr", "");
            nameErr = false;
            var elem = document.getElementById("name");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    

    if(email == "") {
        printError("emailErr", "Please enter your email address");
         var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
            var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("emailErr", "");
            emailErr = false;
             var elem = document.getElementById("email");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    }
    

    if(country == "Select") {
        printError("countryErr", "Please select your country");
        var elem = document.getElementById("country");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("countryErr", "");
        countryErr = false;
        var elem = document.getElementById("country");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    

    if(gender == "") {
        printError("genderErr", "Please select your gender");
        var elem = document.getElementById("gender");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("genderErr", "");
        genderErr = false;
        var elem = document.getElementById("gender");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    
    
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } 
};