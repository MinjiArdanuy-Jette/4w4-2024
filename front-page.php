<!-- Récupérer le header -->
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
      <h1>
        <?= get_bloginfo("name") ?>
      </h1>
      <h2 class="premier-h2">
        <?= get_bloginfo("description") ?>
      </h2>
      <h3>TIM-Collège de Maisonneuve</h3>
      <button>Événements</button>
    </section>
  </section>
</div>

<div id="accueil" class="global">
  <section>
    <h2>Accueil</h2>
    <p>
      Lorem ipsum dolor sit amet. <a href="#">Sans souci</a>Lorem ipsum
      dolor sit amet consectetur adipisicing elit. Autem eveniet libero nemo
      hic tempora
    </p>
    <div class="expo">
      <img src="images/github.png" alt="github" />
      <img src="images/github.png" alt="github" />
      <img src="images/github.png" alt="github" />
    </div>
    <button>Plusieurs oeuvres sont disponibles ici</button>
  </section>
</div>
<div id="evenement" class="global diagonale">
  <section>
    <h2>Événement</h2>
    <div class="categorie-destination">
      <?php
      // Récupérer toutes les catégories
      $categories = get_categories();

      // Parcourir les catégories
      foreach ($categories as $uneCategorie) {
        // Récupérer le nombre d'articles de la catégorie actuelle
        $uneCategorie_count = $uneCategorie->count;
        // Récupérer la description de la catégorie actuelle
        $uneCategorie_description = wp_trim_words($uneCategorie->description, 10, "...");

        // Afficher le titre, la description et le nombre d'articles de la catégorie actuelle
        echo '<div class="carte">';
        echo '<h3>' . $uneCategorie->name . '</h3>';
        echo '<p>' . $uneCategorie_description . '</p>';
        echo '<p>Nombre d\'articles : ' . $uneCategorie_count . '</p>';
        // Afficher un lien vers tous les articles de la catégorie actuelle
        echo '<a href="' . get_category_link($uneCategorie->term_id) . '">Voir tous les articles</a>';

        echo '</div>'; // Fermer la div category
      }
      ?>
    </div>
</div>
</section>
</div>
<div id="galerie" class="global">
  <section>
    <h2>Galerie</h2>
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
              <?php the_content(); ?>
            </p>
            <?php the_category(); ?>
            <!-- Ajout d'un hyperlien -->
            <a href="<?php the_permalink(); ?>"> Plus d'infos</a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>
  <!-- Récupérer le footer -->
  <?php get_footer(); ?>