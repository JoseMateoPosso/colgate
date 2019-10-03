<footer>
</footer>

<?php wp_footer() ?>

</body>
</html>

<script>
    $(".dial").knob({
        'min':10,
        'max':50,
        'width':100,
        'height':100,
        'displayInput':true,
        'release':function(v) {alert(v);}
    });  
</script>