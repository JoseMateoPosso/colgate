<footer>

<input type="text" id="dials"  class="dial">
<img id="myImage" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cepillo-normal.png" alt="">

<div class="container">
  <div class="row">
    <div class="col-md-6">
    <img onclick="ChangeImg(1)" class="numero-01" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/numero-01.png" alt="">
    </div>
    <div class="col-md-6">
    <img onclick="ChangeImg(2)" class="numero-02" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/numero-02.png" alt="">
    <p id="demo"></p>    
    </div>
  </div>
</div>

</footer>

<?php wp_footer() ?>

</body>
</html>

