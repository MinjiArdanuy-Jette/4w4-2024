<?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label>
    <input class="recherche__input" type="search" class="search-field" placeholder="Search..."
      value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button class="recherche__bouton" type="submit" class="search-submit">
    <span class="recherche__icone">&#x1F50D;</span>
  </button>
</form>

<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<main class="site__main">

  <section class="recherche__section">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post(); ?>
        <article>
          <h5><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a></h5>
          <?php echo wp_trim_words(get_the_excerpt(), 60) ?>
          <hr>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>