<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!-- Stylesheets
    For loading style sheets
  ============================================= -->
 <?php wp_head();?>

 <title>Index Template</title>

</head>

<body <?php body_class('no-transition stretched'); ?> >

<div id="wrapper" class="clearfix">
  <!-- Top Bar
    ============================================= -->
  <div id="top-bar" class="dark">
    <div class="container clearfix">
      <div class="col_half nobottommargin">
        <!-- Top Links
                ============================================= -->
        <div class="top-links">
          <?php
            if(has_nav_menu('secondary')) {
              wp_nav_menu(array(
                'theme_location' =>'secondary',
                'container'=>false,
                'fallback'=>false,
                'depth'=>4
              ));
          }
          ?>
        </div><!-- .top-links end -->
      </div>

      <div class="col_half fright col_last nobottommargin">

        <!-- Top Social
                ============================================= -->
        <div id="top-social">
          <ul>
            <?php
            if(get_theme_mod('ju_facebook_handle')) {
              ?>
              <li><a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle');?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
              <?php
              }
              ?>
              
              <?php
              if(get_theme_mod('ju_twitter_handle')) {
              ?>
              <li><a href="https://twitter.com/<?php echo get_theme_mod('ju_twitter_handle');?>" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
              <?php
                }
              ?>
              <?php
              if(get_theme_mod('ju_instagram_handle')) {
              ?>
              <li><a href="https://instagram.com/<?php echo get_theme_mod('ju_instagram_handle');?>" class="si-instagram"><span class="ts-icon"><i class="icon-instagram"></i></span><span class="ts-text">Instagram</span></a></li>
              <?php
                }
              ?>

              <?php
              if(get_theme_mod('ju_phone_handle')) {
              ?>
               <li><a class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo get_theme_mod('ju_phone_handle');?></span></a></li>
              <?php
                }
              ?>
              <?php
              if(get_theme_mod('ju_email_handle')) {
              ?>
               <li><a href="mailto:<?php echo get_theme_mod('ju_email_handle');?>" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod('ju_email_handle');?></span></a></li>
              <?php
                }
              ?>
            </ul>
        </div><!-- #top-social end -->

      </div>

    </div>

  </div><!-- #top-bar end -->

  <!-- Header
    ============================================= -->
  <header id="header" class="sticky-style-2">
    <div class="container clearfix">
      <div id="logo">
        <?php
          if(has_custom_logo()) {
            the_custom_logo();
          }else {
            ?>
            <a href="<?php echo home_url('/');?>" class="standard-logo"><?php bloginfo('name');?></a> <?php
          }
          ?>
      </div>

      <div class="top-advert">
        <?php
          if(function_exists('quads_ad')) {
            echo do_shortcode('[quads id=1]');
          }

        ?>
      </div>

    </div>

    <div id="header-wrap">
      <nav id="primary-menu" class="style-2">
        <div class="container clearfix">
          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
          <?php
            if(has_nav_menu('primary')) {
              wp_nav_menu(array(
                'theme_location' =>'primary',
                'container'=>false,
                'fallback'=>false,
                'depth'=>4
              ));
          }
          ?>
          <!-- Top Cart
            ============================================= -->


            <?php
              if(get_theme_mod('ju_header_show_cart')=="yes") {
             ?>
             <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                <h4>Shopping Cart</h4>
                </div>
              <div class="top-cart-items">
                <div class="top-cart-item clearfix">
                  <div class="top-cart-item-image">
                    <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                  </div>
                  <div class="top-cart-item-desc">
                    <a href="#">Blue Round-Neck Tshirt</a>
                    <span class="top-cart-item-price">$19.99</span>
                    <span class="top-cart-item-quantity">x 2</span>
                  </div>
                </div>
                <div class="top-cart-item clearfix">
                  <div class="top-cart-item-image">
                    <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                  </div>
                  <div class="top-cart-item-desc">
                    <a href="#">Light Blue Denim Dress</a>
                    <span class="top-cart-item-price">$24.99</span>
                    <span class="top-cart-item-quantity">x 3</span>
                  </div>
                </div>
              </div>
              <div class="top-cart-action clearfix">
                <span class="fleft top-checkout-price">$114.95</span>
                <button class="button button-3d button-small nomargin fright">View Cart</button>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        <?php
        if(get_theme_mod('ju_header_show_search')=="yes") {
          ?>
          <div id="top-search">
            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
              <input type="text" name="q" class="form-control" value="<?php the_search_query(); ?>" placeholder="Type &amp; Hit Enter..">
            </form>
          </div>
          <?php
        }
        ?>
        </div>
      </nav><!-- #primary-menu end -->
    </div>
 </header>