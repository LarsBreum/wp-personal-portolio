<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <header>
        <nav class="navbar navbar-expand-lg bg-dark">
          <a class="navbar-brand" href="<?php home_url(); ?>"><?php bloginfo('title'); ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nav-wrap collapse navbar-collapse justify-content-end" id="navbarsExample05">
              <?php 
              $defaults = array(
              'container'       => 'ul',
              'theme_location'  => 'header',
              'depth'           => 1,
              'menu_class'      => 'header-nav navbar-nav',
            );

            wp_nav_menu( $defaults );
            ?>
          </div>
        </nav>
      </header>
    </div>
    <div id="wrap-main" class="container-fluid">
