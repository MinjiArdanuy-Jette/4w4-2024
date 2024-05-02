<?php

//  Template footer.php 
// Ce gabarit est appelé à la fin de chaque  modèle de thème
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
  <?php wp_footer() ?>
  <!-- Mettre le formulaire de recherche manuellement car il est trop différent du modèle de base -->
  <div class="recherche-footer">
    <input type="checkbox" id="toggle-search-footer">
    <label for="toggle-search-footer" class="search-icon">
      <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="32" height="32">
    </label>
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
      <input type="text" placeholder="Recherche" value="<?php echo get_search_query(); ?>" name="s"
        class="search-input">
      <button type="submit"><img src="https://s2.svgbox.net/hero-solid.svg?ic=arrow-right&color=000" width="28"
          height="28"></button>
    </form>
  </div>
</div>
</body>

</html>