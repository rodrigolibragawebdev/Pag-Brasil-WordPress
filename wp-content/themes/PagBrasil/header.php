<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="py-2 container-fluid bg-light headerContainer">
      <nav class="navbar navbar-expand-lg navbar-light container itemsHeaderContainer">
        <div class="pr-3 customLogoDiv"><?php the_custom_logo(); ?></div>
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- GERA LINKS A PARTIR DO MENU CRIADO -->
          <?php wp_nav_menu([
            "menu" => "main_nav",
            "theme_location" => "primary",
            "menu_class" => "navbar-nav",
            "container" => "false",
            "walker" => new WP_Bootstrap_Navwalker(),
          ]); ?>
        </div>
      </nav>
    </div>

    <?php wp_head(); ?>

  </header>