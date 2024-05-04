<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section>
    <h1>
      <?php the_title(); ?>
    </h1>
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
          <div class="prevision-meteo">
            <p>Température minimum <?php echo round(get_field("temperature_minimum"), 1); ?>°C</p>
            <p>Température maximum <?php echo round(get_field("temperature_maximum"), 1); ?>°C</p>
            <p>Température actuelle <?php echo get_field("temperature_actuelle") ?>°C</p>
            <p>Ville avoisinante <?php the_field("ville_avoisinante") ?></p>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>

  <!-- Récupérer le footer -->
  <?php get_footer(); ?>