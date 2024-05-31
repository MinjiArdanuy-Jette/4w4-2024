<?php
/**
 * Template name: Conférence
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
  <?php get_template_part("gabarits/vague1") ?>
  <?php
  if (have_posts()):
    the_post(); ?>
    <h1><?= get_the_title(); ?></h1>
    <?php the_content(); ?>
    <p>L'adresse de l'evénement <?php the_field('adresse'); ?></p>
    <p>La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?></p>
  <?php endif; ?>
  <?php get_template_part("gabarits/vague2") ?>
</main><!-- #main -->
<?php
get_footer();
