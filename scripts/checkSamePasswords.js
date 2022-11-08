function check(){
    var firstInput = document.getElementById("pass1").value;//first password box
    var secondInput = document.getElementById("pass2").value;//second password box
    var firstName = document.getElementById("firstName").value;//first name box
    var lastName = document.getElementById("lastName").value;//last name box
    var email = document.getElementById("email").value;//email address box

    if (firstInput === secondInput) {//checks if inputs for passwords are the same
        
        console.log("passwords are the same");
        if(firstName.length != 0 && lastName.length != 0 && email.length != 0 && firstInput.length != 0){
            console.log('all inputs present');
            document.getElementById("createAccount").submit();

        }else{
            alert('Please fill out all fields!');
        }
        

    } else {
        alert("Passwords are not the same!");
        // do something if the first input is less than the second
    }
}

