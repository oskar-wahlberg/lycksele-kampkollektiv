// Main SCRIPT file

var DropDownList = document.getElementById("ddn-list");
var DropDownIconOpen = document.getElementById("ddn-open");
var DropDownIconClose = document.getElementById("ddn-close");
var Title = document.getElementsByTagName("title")[0].innerHTML;

function EscapeHatch() {
    location.href = "../index.php";
}

function ToggleDropDown() {
    if (DropDownList.style.display === "none") {
        DropDownList.style.display = "block";
        DropDownIconOpen.style.display = "none";
        DropDownIconClose.style.display = "block";
    } else {
        DropDownList.style.display = "none";
        DropDownIconOpen.style.display = "block";
        DropDownIconClose.style.display = "none";
    }
}

function GoToLoginFromIndex() {
    location.href = "subpages/login.php";
}

function GoToLogin() {
    location.href = "login.php";
}

function CustomizeDDNPages() {
    if (Title === "Lycksele Kampkollektiv Muay Thai" || Title === "Lycksele Kampkollektiv Brasiliansk Jiu Jitsu" || Title === "Lycksele Kampkollektiv Bully Proof") {
        ToggleDropDown();
    }
}

function OnPageLoaded() {
    ToggleDropDown();
    CustomizeDDNPages();
}

window.onload = OnPageLoaded();