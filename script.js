// script.js 

function reloadCaptcha() {
    //alert(1)
    // Change the source of the captcha image to a new URL to force a refresh
    document.getElementById('captchaImage').src = 'captcha_image.php?' + Date.now();
}

