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
        <a href="https://wa.me/9779840368838" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="mailto:kshitizkhanal01@gmail.com" class="gmail"><i class="bi bi-envelope"></i></a>
        <a href="https://www.linkedin.com/in/kshitiz-khanal-5809371a0/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://x.com/khanal_xitiz" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://discord.com/users/644489674580033566" class="discord"><i class="bi bi-discord"></i></a>
      </div>

    </div>

  </header>