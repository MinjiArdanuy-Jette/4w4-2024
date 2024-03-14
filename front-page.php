<!-- Récupérer le header -->
<?php get_header(); ?>
<h1>front_page.php</h1>
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
    <h4>Lorem ipsum dolor sit.</h4>
    <blockquote>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum
      deleniti, quidem recusandae nobis sunt quis dolore est optio. Est ex
      fuga molestiae tenetur soluta ducimus ea autem, ad enim error.
      <span><a href="#">Lorem, ipsum dolor.</a></span>
    </blockquote>
  </section>
</div>
<div id="galerie" class="global">
  <section>
    <h2>Galerie</h2>
    <div class="cours">
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