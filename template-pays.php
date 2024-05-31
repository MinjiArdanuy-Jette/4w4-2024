<?php
get_header()
  ?>
<?php get_template_part("gabarits/vague1") ?>
<main class="site__pays">
  <?php
  if (have_posts()):
    the_post(); ?>
    <h1><?= get_the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endif; ?>
</main>
<?php get_template_part("gabarits/vague2") ?>
<?php
get_footer()
  ?>