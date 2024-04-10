<?php get_header(); ?>
<h1>404.php</h1>
<!-- <//////////////// Contenu principal -->
<div id="erreur_404" class="global">
  <section>
    <h2>Erreur 404 </h2>
    <p>Vous essayez d'accéder à une page qui n'existe pas</p>
    <a href=" <?= get_bloginfo("url"); ?>">
      <?= get_bloginfo("name"); ?>
    </a>
  </section>
</div>
<!-- //////////////////// Pied de page -->
<?php get_footer(); ?>