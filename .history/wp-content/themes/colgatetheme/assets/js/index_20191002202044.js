jQuery(document).ready(function($) {

    $(".dial").knob({
        'min':10,
        'max':100,
        'width':100,
        'height':100,
        'displayInput':true,
        'release':function(v) {alert(v);}
    });     
});


function ChangeImg() {
    document.getElementById('myImage').src='http://localhost/xigna/wp-content/themes/colgatetheme/assets/img/cepillo-twister.png';
    var element = document.getElementsByClassName(".numero-02");
    element.addClass("opacity");
}