<footer>

<input type="text" id="dials" readonly value="50" class="dial">
<img id="myImage" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cepillo-normal.png" alt="cepillo">

<div class="butons section">
  <div class="imgs-container">
    <div class="div nm1">
    <img onclick="ChangeImg(1)" class="numero-01" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/numero-01.png" alt="">
    </div>
    <div class="div nm2">
    <img onclick="ChangeImg(2)" class="numero-02 opacity" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/numero-02.png" alt="">
    <p id="demo"></p>    
    </div>
  </div>
</div>

</footer>

<?php wp_footer() ?>

</body>
</html>

