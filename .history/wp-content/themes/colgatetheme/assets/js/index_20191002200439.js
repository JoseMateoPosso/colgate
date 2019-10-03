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


function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}