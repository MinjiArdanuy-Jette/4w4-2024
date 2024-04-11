<?php get_header(); ?>
<!-- <//////////////// Contenu principal -->
<div id="erreur_404" class="global">
  <section>
    <div class="erreur404-conteneur">
      <div class="texte-contenu">
        <h1>Erreur 404 </h1>
        <p>Vous essayez d'accéder à une page qui n'existe pas</p>
        <p>Pour revenir dans un monde merveilleux qui fait voyager, Cliquer sur le bouton ci-dessous</p>
        <button>
          <a href=" <?= get_bloginfo("url"); ?>">
            <?= get_bloginfo("name"); ?>
          </a></button>
        <!-- Mettre le formulaire de recherche manuellement car de base il est trop différent du modèle de base -->
        <form class="recherche_erreur" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <label>
            <input class="recherche__input" type="search" class="search-field" placeholder="Search..."
              value="<?php echo get_search_query(); ?>" name="s" />
          </label>
          <button class="recherche__bouton" type="submit" class="search-submit">
            <span class="recherche__icone">&#x1F50D;</span>
          </button>
        </form>
      </div>
      <img src="http://localhost/4w4_wp2/wp-content/uploads/2024/03/logo-voyage-4w4.png" alt="logo-avion">
    </div>
  </section>
</div>
<!-- //////////////////// Pied de page -->
<?php get_footer(); ?>