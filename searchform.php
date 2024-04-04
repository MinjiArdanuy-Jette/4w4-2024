<!-- <?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label>
    <input class="recherche__input" type="search" class="search-field" placeholder="Recherche"
      value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button class="recherche__bouton" type="submit" class="search-submit">
    <span class="recherche__icone">&#x1F50D;</span>
  </button>
</form> -->
<div class="recherche">
  <input type="checkbox" id="toggle-search">
  <label for="toggle-search" class="search-icon">
    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="32" height="32">
  </label>
  <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
    <input type="text" placeholder="Recherche" value="<?php echo get_search_query(); ?>" name="s" class="search-input">
    <button type="submit"><img src="https://s2.svgbox.net/hero-solid.svg?ic=arrow-right&color=000" width="28"
        height="28"></button>
  </form>
</div>