<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section>
    <h1>
      <?php single_cat_title(); ?>
    </h1>
    <div class="image-categorie">
      <?php
      // Récupérer la catégorie actuelle
      $category = get_queried_object();

      // Vérifier si la catégorie existe
      if ($category) {
        // Récupérer l'image personnalisée pour cette catégorie
        $category_image = '';

        // Définir l'image en fonction de la catégorie
        if ($category->slug == 'sport') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'pleine-nature') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'aventure') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'croisiere') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'culturel') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'repos') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'zen') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        } elseif ($category->slug == 'populaire') {
          $category_image = get_template_directory_uri() . '/images/voyage-avion.png';
        }

        // Afficher l'image
        if ($category_image) {
          echo '<img src="' . ($category_image) . '" alt="' . esc_attr($category->name) . '">';
        }
      }
      ?>
    </div>
    <div class="description-categorie">
      <h2>
        <?php echo category_description(); ?>
      </h2>
    </div>
    <div class="sticker-conteneur">
      <aside class="sticker jaune">
        <p>La grande aventure commence !</p>
        <span class="pli"></span>
      </aside>
    </div>
  </section>
</div>
<div id="galerie" class="global">
  <section>
    <h2>Destinations de voyage
      <?php single_cat_title(); ?>
    </h2>
    <div class="destination">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();

          /*Variables*/
          /*Variable du titre complet du cours*/
          $titre = get_the_title();

          /*Variable de la description des cours*/
          $description = get_the_content();
          ?>
          <div class="carte">
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              <?php echo wp_trim_words(get_the_content(), 10, "..."); ?>
            </p>
            <?php the_category(); ?>
            <a href="<?php the_permalink(); ?>"> Lire la suite</a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>
  <!-- Récupérer le footer -->
  <?php get_footer(); ?>