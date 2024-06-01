<?php

//  Template footer.php 
// Ce gabarit est appelé à la fin de chaque  modèle de thème
?>

<div id="footer" class="global">
  <footer>
    <?php echo get_custom_logo() ?>
    <section class="pied2page">
      <div class="liens">
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
      </div>
      <div class="description">
        <h2>Description</h2>
        <h3> La routine du travail devient-elle monotone ? Alors, il est l'heure d'apporter un brin d'aventure dans
          votre
          vie
          ! À la recherche d'une épique chevauchée à travers le globe avec des amis ou à la recherche d'un silence
          paradisiaque en solo? Sur notre site vous trouverez votre bonheur, petit et grand !</h3>
      </div>
    </section>
    <div class="a-propos">
      <h3>Minji Ardanuy-Jetté</h3>
      <h3>3800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 </h3>
      <a href="https://github.com/MinjiArdanuy-Jette/4w4-2024/tree/tp2">Dépôt du thème</a>
      <a href="https://github.com/MinjiArdanuy-Jette/carrousel">Dépôt du carrousel</a>
      <a href="https://minjiardanuy-jette.github.io/4w4-2024/">Ma githubPage</a>


    </div>
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
  </footer>
  <!-- Logo des réseaux sociaux -->
  <div class="social-footer">
    <a href="https://www.facebook.com/groups/170302146254"><img
        src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32" /></a>
    <a href="https://www.instagram.com/maisonneuvetim/"><img
        src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32" /></a>
    <a href="https://www.youtube.com/@TIMaisonneuve"><img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000"
        width="32" height="32" /></a>
  </div>
</div>
</body>
<?php wp_footer() ?>

</html>