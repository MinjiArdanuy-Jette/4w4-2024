<?php get_header(); ?>

<div id="entete" class="global">
  <div class="social">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32" />
    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32" />
    <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" width="32" height="32" />
  </div>
  <!-- Vague1 -->
  <div class="vague">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
        opacity=".25" class="shape-fill"></path>
      <path
        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
        opacity=".5" class="shape-fill"></path>
      <path
        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
        class="shape-fill"></path>
    </svg>
  </div>
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

          /*Variables*/
          /*Variable du titre complet du cours*/
          $titre = get_the_title();
          /*Variable du sigle du cours ex: 582-1M1*/
          $sigle = substr($titre, 0, 7);
          /*Variable de la durée du cours ex: (75h)*/
          /*Trouver la position de la position*/
          $position_parenthese = strpos($titre, "(");
          $duree = substr($titre, $position_parenthese + 1, -1);
          /*Variable du titre sans le sigle et la durée en partant du sigle*/
          $titre = substr($titre, 7, $position_parenthese - 7);
          /*Variable de la description des cours*/
          $description = wp_trim_words(get_the_content(), 10);
          ?>
          <div class="carte">
            <h4>
              <?= $sigle ?>
            </h4>
            <h3>
              <?= $titre; ?>
            </h3>
            <p>
              <?= $description ?>
            </p>
            <h4>
              Durée
              <?= $duree ?>
            </h4>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- Vague2 -->
  <?php get_template_part("gabarits/vague"); ?>

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