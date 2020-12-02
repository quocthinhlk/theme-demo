<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $image = get_field('favicon', 'option');  ?>
  <link rel="icon" href="<?php echo esc_url($image['url']); ?>" type="image/x-icon"/>
  <?php wp_head(); ?>
</head>
<body>
  <?php
  $class = '';
  if (is_front_page()){
    $class ='';
  }else{
    $class = 'wapper_menu_active_fix';
  }
  ?>
  <header class="header">
    <div class="wapper_menu <?php echo $class; ?>">
      <div class="container">
        <div class="nav_menu wp_menu">
          <div class="navbar_left">
            <div class="header__inner">
              <nav class="nav-menu">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location'     => "nav-main-menu",
                    'menu_class'        => "navbar_nav",
                    'container'         => "",
                    'menu_id'     => "menu",
                  )
                );
                ?>
              </nav>
            </div>
          </div>
          <div class="navbar_right">
            <div class="navbar_social">
              <a class="social_link" href="<?php the_field('facebook', 'option'); ?>" target="_blank" original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a class="social_link" href="<?php the_field('twitter', 'option'); ?>" target="_blank" original-title="Twitter"><i class="fab fa-twitter"></i></a>
              <a class="social_link" href="<?php the_field('instagram', 'option'); ?>" target="_blank" original-title="Instagram"><i class="fab fa-instagram"></i></a>
              <a class="social_link" href="<?php the_field('youTube', 'option'); ?>" target="_blank" original-title="YouTube"><i class="fab fa-youtube"></i></a>
              <a class="btn_search search_form" href="#"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
        <div class="search-text wp_search">
          <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form">
            <input type="hidden" name="post_type" value="post">
            <input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
            <a href="#" class="close_button search-close">X</a>
          </form>
        </div>
      </div>
    </div>

    <div class="mobile_menu">
      <div class="menu_button">
        <div class="burger">
          <span class="burger__line burger__line_first"></span>
          <span class="burger__line burger__line_second"></span>
          <span class="burger__line burger__line_third"></span>
          <span class="burger__line burger__line_fourth"></span>
        </div>
      </div>
      <div class="mobile_menu_inner">
        <nav class="nav-menu-mobile">
          <?php
          wp_nav_menu(
            array(
              'theme_location'     => "nav-main-menu",
              'menu_class'        => "navbar_nav",
              'container'         => "",
              'menu_id'     => "menu",
            )
          );
          ?>
        </nav>
      </div>
    </div>
</header>