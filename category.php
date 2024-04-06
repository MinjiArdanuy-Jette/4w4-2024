<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section>
    <h1>
      <?php single_cat_title(); ?>
    </h1>
    <div class="sticker-container">
      <div class="image-categorie">
        <?php
        // Récupérer la catégorie actuelle
        $categorie = get_queried_object();

        // Vérifier si la catégorie existe
        if ($categorie) {
          // Récupérer l'image personnalisée pour cette catégorie
          $categorie_image = '';

          // Définir l'image en fonction de la catégorie
          if ($categorie->slug == 'sport') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'pleine-nature') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'aventure') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'croisiere') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'culturel') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'repos') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'zen') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          } elseif ($categorie->slug == 'populaire') {
            $categorie_image = get_template_directory_uri() . '/images/voyage-avion.png';
          }

          // Afficher l'image
          if ($categorie_image) {
            echo '<img src="' . ($categorie_image) . '" alt="' . esc_attr($categorie->name) . '">';
          }
        }
        ?>
      </div>
      <aside class="sticker jaune gauche">
        <p>Destination
          <?php single_cat_title(); ?> n'attend que vous !
        </p>
        <span class="pli"></span>
      </aside>
      <aside class="sticker jaune droite">
        <p>La grande aventure commence !</p>
        <span class="pli"></span>
      </aside>
    </div>
    <div class="description-categorie">
      <h2>
        <?= category_description(); ?>
      </h2>
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