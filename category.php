<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section>
    <h2>Accueil</h2>
    <div class="description-categorie">
      <h2>
        <?php echo category_description(); ?>
      </h2>
    </div>
  </section>
</div>
<div id="galerie" class="global">
  <section>
    <h2>Destination de voyage</h2>
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
            <a href="<?php the_permalink(); ?>"> Suite</a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>
  <!-- Récupérer le footer -->
  <?php get_footer(); ?>