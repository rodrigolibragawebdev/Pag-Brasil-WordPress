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
        <div class="pr-3 customLogoDiv"><?php if (has_custom_logo()):
          the_custom_logo();
        else:
           ?> <a href="<?php echo home_url("/"); ?>"><img src="<?php bloginfo(
  "template_url"
); ?>/assets/images/logo-pagbrasil-color-v3.svg" alt="logo_footer"></a> <?php
        endif; ?></div>
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- GERA LINKS A PARTIR DO MENU CRIADO -->

          <?php if (has_nav_menu("primary")):
            wp_nav_menu([
              "menu" => "main_nav",
              "theme_location" => "primary",
              "menu_class" => "navbar-nav",
              "container" => "false",
              "walker" => new WP_Bootstrap_Navwalker(),
            ]);
          else:
             ?>
          <div class="navMenuArea">
            <a href="<?php echo home_url(); ?>/home">Página Inicial</a>
            <a href="<?php echo home_url(); ?>/sobre-nos">Sobre nós</a>
            <a href="<?php echo home_url(); ?>/blog">Blog</a>
          </div>
          <?php
          endif; ?>
        </div>
      </nav>
    </div>

  </header>