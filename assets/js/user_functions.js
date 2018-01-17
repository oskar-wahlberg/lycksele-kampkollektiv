var AddUserField;
var RemoveUserField;

function ToggleAddUserField() {
    if (AddUserField.style.display === "none") {
        AddUserField.style.display = "flex";
    } else {
        AddUserField.style.display = "none";
    }
}

function ToggleRemoveUserField() {
    if (RemoveUserField.style.display === "none") {
        RemoveUserField.style.display = "flex";
    } else {
        RemoveUserField.style.display = "none";
    }
}

function GetFields() {
    AddUserField = document.getElementById("AddUserField");
    RemoveUserField = document.getElementById("RemoveUserField");
    
    HideFields();
}

function HideFields() {
    AddUserField.style.display = "none";
    RemoveUserField.style.display = "none";
}

window.onload = GetFields();