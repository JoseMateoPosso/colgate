jQuery(document).ready(function($) {

    $(".dial").knob({
        'min':0,
        'max':100,
        'width':100,
        'height':100,
        'displayInput':true,
        //'release':function(v) {alert(v);}
    });     
});


function ChangeImg(option) {
    if(option===1){
        //jQuery("input.dial").trigger('change');
        document.getElementById('myImage').src='http://localhost/xigna/wp-content/themes/colgatetheme/assets/img/cepillo-normal.png';
        jQuery( ".numero-02" ).toggleClass( "opacity" );
        console.log('llega',option);
        jQuery("input.dial").val('50');
        jQuery("input.dial").trigger('change');
        //document.getElementById('dials').value=50;
    }else if(option===2){
        //jQuery("input.dial").trigger('change');
        document.getElementById('myImage').src='http://localhost/xigna/wp-content/themes/colgatetheme/assets/img/cepillo-twister.png';
        jQuery( ".numero-01" ).toggleClass( "opacity" );
        console.log('llega',option);
        jQuery("input.dial").val('65');
        jQuery("input.dial").trigger('change');
       // document.getElementById('dials').value=65;
    }
}