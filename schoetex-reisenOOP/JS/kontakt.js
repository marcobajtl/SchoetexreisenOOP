document.querySelector('[name="Form"]').setAttribute("onsubmit", "return validateForm()");

function validateForm() {
    let requiredFields = document.getElementsByClassName("required");
    for (let item of requiredFields) {
        if(item.value == null || item.value === ""){
            alert("Bitte fülle alle mit * markierten Felder aus!")
            return false;
        }
    }
}

