<?php
/**
 * Gabarits pour créer les cartes de destinations
 */
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