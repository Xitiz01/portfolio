<?php
/**
 * Header Template 
 *
 * @package Portfolio 
 *
 */
?>

<header id="header" class="header dark-background d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="header-container d-flex flex-column align-items-start">
      <nav id="navmenu" class="navmenu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary-menu',
                'menu_class'     => '',
                'container'      => false,
                'fallback_cb'    => 'portfolio_fallback_menu',
                'walker'         => new Portfolio_Walker_Nav_Menu(),
            )
        );
        ?>
      </nav>

      <div class="social-links text-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>

  </header>