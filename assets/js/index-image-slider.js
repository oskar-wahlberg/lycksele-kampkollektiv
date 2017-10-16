// This JavaScript file will be used for making the Image Slider on the index page work

var img;
var img_amount;
var img_indicators;
var displayed_img = 0;

// Get all of the images in the image slider
function GetImages() {
    img = document.getElementsByClassName("i_is");
    img_amount = img.length;
    img_indicators = document.getElementsByClassName("i_id");
    
    HideImages();
}

// Hide all images except for the first one
function HideImages() {
    var i;
    for (i = 1; i < img_amount; i++) {
        img[i].style.display = "none";
    }
    
    img_indicators[displayed_img].style.opacity = ".5";
}

// Make the arrows in the imageslider work
function ImageSwitch(x) {
    if (x === 1) {
        img[displayed_img].style.display = "none";
        img_indicators[displayed_img].style.opacity = "1";
        
        if(displayed_img === img_amount - 1) {
            displayed_img = 0;
        } else {
            displayed_img += 1;
        }
        
        img[displayed_img].style.display = "block";
        img_indicators[displayed_img].style.opacity = ".5";
    } else if (x === -1) {
        img[displayed_img].style.display = "none";
        img_indicators[displayed_img].style.opacity = "1";
        
        if(displayed_img === 0) {
            displayed_img = img_amount - 1;
        } else {
            displayed_img -= 1;
        }
        
        img[displayed_img].style.display = "block";
        img_indicators[displayed_img].style.opacity =".5";
    }
}

// IMAGE SLIDER INDICATION START

function ImageIndicatorSwitch(x) {
    img[displayed_img].style.display = "none";
    img_indicators[displayed_img].style.opacity = "1";
    
    displayed_img = x;
    
    img[displayed_img].style.display = "block";
    img_indicators[displayed_img].style.opacity = ".5";
}

// IMAGE SLIDER INDICATION END

// Run a function once the page has been loaded
window.onload = GetImages();
