<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section class="alignement-meteo">
    <h1>
      <?php the_title(); ?>
    </h1>
    <div class="meteo">
      <!-- Température actuelle  -->
      <h4><?php echo round(get_field("temperature_actuelle"), 1) ?>°C</h4>
      <!-- Température minium  -->
      <p><?php echo round(get_field("temperature_minimum"), 1); ?>°C</p>
      <!-- Température maximum  -->
      <p><?php echo round(get_field("temperature_maximum"), 1); ?>°C</p>
      <!-- Ville avoisinante -->
      <p> <?php the_field("ville_avoisinante") ?></p>
    </div>
  </section>
</div>

<div id="galerie" class="global">
  <section>
    <div class="article-voyage">
      <?php
      if (have_posts()):
        the_post();
        ?>
        <div class="carte">
          <p>
            <?php the_content(); ?>
          </p>
          <?php the_category(); ?>
        <?php endif; ?>
        <div class="etoile">
          <?php
          // Récupérer la valeur d'appréciation pour l'article en cours
          $appreciation = get_field('appreciation');

          // Afficher les étoiles en fonction de la valeur d'appréciation
          for ($i = 1; $i <= $appreciation; $i++) {
            echo '<img src="' . get_template_directory_uri() . '/images/etoile.png" alt="etoile">';
          }
          ?>
        </div>
      </div>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>
</div>
<!-- Récupérer le footer -->
<?php get_footer(); ?>