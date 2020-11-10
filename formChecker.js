function validateForm(event){
    let quantity1 = document.getElementsByName("Q1")[0],
        quantity2 = document.getElementsByName("Q2")[0],
        quantity3 = document.getElementsByName("Q3")[0];
    if (quantity1.value < 0 || quantity1.value === "" ||
        quantity2.value < 0 || quantity2.value === "" ||
        quantity3.value < 0 || quantity3.value === ""){
            event.preventDefault();
            alert("Quantities must be numbers greater than zero.");
            return;
        }
    
    let un = document.getElementsByName("username")[0].value;
    if (!validateEmail(un)){
        event.preventDefault();
        alert("Username must be the form of an email: something@something.something");
        return;
    }

    let pw = document.getElementsByName("password")[0].value;
    if (pw === ""){
        event.preventDefault();
        alert("Password must not be blank.");
        return;
    }

    let radios = document.getElementsByName("shipping");
    if (!oneRadioClicked(radios)){
        event.preventDefault();
        alert("You must select a shipping option.");
        return;
    }

    //If it gets here the form is valid
    return;
}

function oneRadioClicked(buttons){
    for (let i = 0; i < buttons.length; i++){
        if (buttons[i].checked) return true;
    }
    return false;
}

function validateEmail(str){
    let atFlag = false;
    for (let i = 0; i < str.length; i++){
        if (!atFlag){
            if (str.charAt(i) === "@") atFlag = true;
        }
        else{
            if (str.charAt(i) === ".") return true;
        }
    }
    return false;
}

function clearPage(){
    document.getElementsByName("username")[0].value = "";
    document.getElementsByName("password")[0].value = "";
    document.getElementsByName("Q1")[0].value = "0";
    document.getElementsByName("Q2")[0].value = "0";
    document.getElementsByName("Q3")[0].value = "0";
    document.getElementsByName("shipping")[0].checked = false;
    document.getElementsByName("shipping")[1].checked = false;
    document.getElementsByName("shipping")[2].checked = false;
}