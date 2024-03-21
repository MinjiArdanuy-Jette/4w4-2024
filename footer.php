<?php

//  Template footer.php 
// Ce gabarit est appelé à ls fin de chaque  modèle de thème
?>

<div id="footer" class="global">
  <footer>
    <h2>Footer</h2>
    <h6>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer-menu',
          'menu_class' => 'footer-menu',
        )
      );
      ?>
    </h6>
  </footer>
</div>
</body>

</html>