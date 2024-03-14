<!-- Récupérer le header -->
<?php get_header(); ?>

<div id="accueil" class="global">
  <section>
    <h2>Accueil</h2>

</div>

<div id="galerie" class="global">
  <section>
    <h2>Galerie</h2>
    <div class="cours">
      <?php
      if (have_posts()):
        the_post();
        /*Variables*/
        /*Variable du titre complet du cours*/
        $titre = get_the_title();

        /*Variable de la description des cours*/
        $description = get_the_content();
        ?>
        <div class="carte">
          <h2>
            <?php the_title(); ?>
          </h2>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>

  <!-- Récupérer le footer -->
  <?php get_footer(); ?>