<!doctype html>
<html lang="en">

<head>
<?php wp_head(); ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php get_bloginfo()?></title>
</head>

<body>

  <!-- HEADER -->
  <header>
    <!-- NAV -->
    <nav class="navbar navbar-expand-md navbar-light">
      <!--
        Nous sommes en mobile first : par défaut notre menu est masqué !
        Je souhaite qu'il s'affiche au dela (= à partir de) d'une certainne largeur.
        navbar-expand-xxx permet d'afficher le menu en entier.
        xxx correspond à une taille (media-query) définie dans Bootstrap.
          sm => 576px
          md => 768px
          lg => 992px
          xl => 1200px
        -->
      <a class="navbar-brand" href="<?php echo get_site_url()?>"><?php echo get_bloginfo()?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Cette partie va automatique être masquée en version mobile -->
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
            // cf : https://developer.wordpress.org/reference/functions/wp_nav_menu/
            // "theme_location" emplacement de menu défini dans functions.php
            wp_nav_menu([
              'theme_location' => 'nav bar head',
              'container' => false,
              'menu_class' => 'navbar-nav',
              'add_li_class'  => 'nav-item',
              'link_class'  => 'nav-link'
          ]);
      ?>
      </div>
    </nav>
    <section class="text-center">
      <h1><?php echo get_bloginfo()?></h1>
      <hr />
      <p>
      <?php echo get_bloginfo('description')?>
      </p>
    </section>
  </header>

  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">