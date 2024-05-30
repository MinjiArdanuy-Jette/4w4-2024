<?php get_header(); ?>
<div id="entete" class="global">
  <div class="social">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32" />
    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32" />
    <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" width="32" height="32" />
  </div>
  <!-- Vague1 -->
  <?php get_template_part("gabarits/vague1") ?>
  <section>
    <section class="hero">
      <h1>Page de recherche</h1>
      <h2 class="premier-h2">
        Vous cherchez une destination ?
      </h2>
      <h3>On a toutes les réponses</h3>
      <button>Événements</button>
    </section>
  </section>
</div>

<div id="boite-recherche" class="global">
  <section>
    <h2>Résultat de recherche</h2>
    <!-- Le formulaire de recherche -->
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
    <div class="destination">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
          ?>
          <div class="carte">
            <h3>
              <?= the_title(); ?>
            </h3>
            <p>
              <?= wp_trim_words(get_the_content(), 50); ?>
            </p>
            <a href="<?= get_permalink(); ?>">Plus d'infos</a>
            <?php the_category(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>

  <?php
  get_footer()
    ?>
  </body>

  </html>