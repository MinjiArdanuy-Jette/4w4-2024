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
      <button><a href="#galerie">Le voyage de vos rêves</a></button>
    </section>
  </section>
</div>

<div id="accueil" class="global">
  <section>
    <h2>Témoignages</h2>
    <div class="carte-avis-conteneur">
      <div class="carte-avis">
        <div class="contenu">
          <div class="photo">
            <img src="images/femme-souriante.jpg" alt="femme-souriante">
          </div>
          <h3>Justine</h3>
          <p>Mon voyage à travers l'Asie a été une expérience transcendante, des rizières de Bali aux plages de Phuket.
            Rencontres chaleureuses, saveurs exotiques et moments partagés ont enrichi mon périple. Une source
            d'inspiration et de découvertes gravée dans mon cœur.</p>
        </div>
      </div>
      <div class="carte-avis">
        <div class="contenu">
          <div class="photo">
            <img src="images/homme-souriant.jpg" alt="homme-souriant" />
          </div>
          <h3>Romain</h3>
          <p>À Kyoto, l'immersion dans la beauté intemporelle du Japon m'a transporté dans un autre temps. Entre
            Kinkaku-ji et Fushimi Inari-taisha, traditions et rituels m'ont éveillé à l'harmonie. Rencontres
            chaleureuses et échanges culturels ont enrichi ce voyage unique.</p>
        </div>
      </div>
      <div class="carte-avis">
        <div class="contenu">
          <div class="photo">
            <img src="images/femme-serieuse.jpg" alt="femme-serieuse" />
          </div>
          <h3>Emanuelle</h3>
          <p>À Paris, entre le Marais et les Champs-Élysées, l'énergie unique m'a enchantée. Gastronomie, balades
            romantiques, musées, rencontres enrichissantes... Une expérience inoubliable qui a gravé en moi le charme
            intemporel de la ville, éveillant une passion pour l'exploration urbaine et culturelle.</p>
        </div>
      </div>
    </div>
  </section>
</div>
<section>
  <h1>Plugin Voyage</h1>
  <?php
  // Appel du shortcode directement dans le fichier front-page.php
  echo do_shortcode('[em_destination]');
  ?>
</section>
<div id="evenement" class="global diagonale">
  <section>
    <h2>Le choix d'un voyage est à votre portée !</h2>
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
        echo '<p>' . $uneCategorie_count . ' articles</p>';
        // Afficher un lien vers tous les articles de la catégorie actuelle
        echo '<a href="' . get_category_link($uneCategorie->term_id) . '">Voir tous les articles</a>';
        echo '<img src="images/logo-avion.png" alt="avion" class= "avion">';
        echo '</div>';
      }
      ?>
    </div>
</div>
</section>
</div>
<div id="galerie" class="global">
  <section>
    <h2>Les destinations en vogue ces derniers temps</h2>
    <div class="destination">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();

          /*Variable de la description des catégories*/
          $description = get_the_content();
          ?>
          <div class="carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h3>
              <?php the_title(); ?>
            </h3>
            <p>
              <?php echo wp_trim_words($description, 20, "..."); ?>
            </p>
            <!-- Ajout d'un hyperlien -->
            <a href="<?php the_permalink(); ?>"> Plus d'infos</a>
            <?php the_category(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>
  <!-- Récupérer le footer -->
  <?php get_footer(); ?>