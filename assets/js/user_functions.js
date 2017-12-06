var AddUserField;

function ToggleAddUserField() {
    if (AddUserField.style.display === "none") {
        AddUserField.style.display = "flex";
    } else {
        AddUserField.style.display = "none";
    }
}

function GetFields() {
    AddUserField = document.getElementById("AddUserField");
    
    HideFields();
}

function HideFields() {
    AddUserField.style.display = "none";
}

window.onload = GetFields();