// Function that will contain the code for displaying a modal image in the gallery

var modalImageHolder;
var modalImages;
var img_id;

function ShowImage(img_id) {
    mih.style.display = "flex";
    modalImages[img_id].style.display = "block";
}

function CloseImg() {
    modalImageHolder.style.display = "none";
    for (var i = 0; i < modalImages.length; i++) {
        modalImages[i].style.display = "none";
    }
}

function HideImages() {
    modalImageHolder = document.getElementById("mih");
    modalImages = document.getElementsByClassName("modal-img");
}

window.onload = HideImages();