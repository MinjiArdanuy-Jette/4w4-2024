<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thème du groupe #1</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&family=Protest+Riot&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&family=Protest+Revolution&family=Protest+Riot&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div id="menu_entete" class="global">
    <!-- Tempate part possible pour le bouton -->
    <input type="checkbox" name="" id="chk_burger">
    <label id="burger" for="chk_burger">
      <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
        color="#fff">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"></path>
      </svg></label>
    <header class="menu_header">
      <?php wp_nav_menu(array("container" => "nav")); ?>
    </header>
  </div>