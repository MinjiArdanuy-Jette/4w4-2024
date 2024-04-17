<?php

//  Template footer.php 
// Ce gabarit est appelé à ls fin de chaque  modèle de thème
?>

<div id="footer" class="global">
  <footer>
    <h2>Liens à visiter</h2>
    <?php
    wp_nav_menu(
      array(
        'menu' => 'footer',
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-menu',
        'container' => 'nav',
        'container_class' => 'footer-menu-container',
      )
    );
    ?>
  </footer>
</div>
<?php wp_footer(); ?>
</body>

</html>