<?php get_header(); ?>
<h1>index.php</h1>
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
      <h1>Thème du groupe #1</h1>
      <h2 class="premier-h2">
        4w4-Conception d'interface <span>et développement Web</span>
      </h2>
      <h3>TIM-Collège de Maisonneuve</h3>
      <button>Événements</button>
    </section>
  </section>
</div>

<div id="galerie" class="global">
  <section>
    <h2>Résultat de recherche</h2>
    <div class="recherche">
      <?php get_search_form() ?>
    </div>
    <div class="cours">
      <?php
      /*if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_title("<h3>", "</h3>");
          echo wp_trim_words(get_the_content(), 30);
        }
      }
       ?>
      */
      if (have_posts()):
        while (have_posts()):
          the_post();
          ?>
          <div class="carte">
            <h3>
              <?= the_title(); ?>
            </h3>
            <p>
              <?= wp_trim_words(get_the_content(), 50); ?>
            </p>
            <a href="<?= get_permalink(); ?>">Plus d'infos</a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Vague2 -->
    <?php get_template_part("gabarits/vague2") ?>
  </section>

  <div id="footer" class="global">
    <footer>
      <h2>Footer</h2>
      <h6>
        Lorem ipsum dolor sit amet consectetur
        <a href="#">adipisicing elit</a>. Minima itaque a voluptates corporis
        placeat labore fugiat necessitatibus porro corrupti? Nulla tempora
        architecto libero veritatis possimus, ratione cum eligendi neque sit!.
      </h6>
    </footer>
  </div>
  </body>

  </html>