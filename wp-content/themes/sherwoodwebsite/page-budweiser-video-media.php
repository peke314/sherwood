<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Single Template
 *
 *
 * @file           budweiser-video-media
 * @package        sherwoodwebsite
 * @author         Victor Janin
 * @copyright      2016 - futur
 * @license        license.txt
 * @version        Release: 1.1
 * @filesource     wp-content/themes/sherwoodwebsite/budweiser-video-media.php
 * @link           http://codex.wordpress.org/Theme_Development#Archive_.28archive.php.29
 * @since          available since Release 1.0
 */
?>

<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <!-- styles -->
    <?php wp_head(); ?>


  </head>
  <body id="budweisermedia">
    <div id="wptime-plugin-preloader"></div>




    <header>
      <div class="in_section">
        <div class="logo">
          <a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>">
            <img src="<?php bloginfo('template_directory');?>/img/SherwoodOutdoor.png">
          </a>
        </div>
        <div class="nav">
           <div class="nav_button">
            <div id="nav-icon4">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <ul>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#about">About</a></li>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#gallery">Gallery</a></li>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#history">History</a></li>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#facts">Facts</a></li>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#icon">Icon</a></li>
            <li><a href="<?php echo esc_url(site_url( '/budweiser-video')); ?>#footer_container">Contact</a></li>
            <li><a href="#mediaGallery">Media Gallery</a></li>
          </ul>
        </div>
      </div>
    </header>


     <section id="mediaWrapper-Wrapper">

      <div id="mediaWrapper">
        <?php if(get_field('budweiser_–_media', 'options')): ?>
              <?php while(has_sub_field('budweiser_–_media', 'options')): ?>
                <div class="itemWrapper">
                  <div class="itemThumb">
                    <div class="itemThumb-img"><img src="<?php the_sub_field('thumbnail', 'options');?>">
                      <div class="itemCont-vid">
                        <?php $image=get_sub_field('image', 'options') ?>
                        <?php if(!empty($image)): ?>
                          <img src="<?php the_sub_field('image', 'options');?>">
                        <?php else:?>
                          <iframe src="https://www.youtube.com/embed/<?php the_sub_field('video', 'options');?>?rel=0" frameborder="0" allowfullscreen></iframe>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="itemThumb-text">
                      <div class="itemTitle">
                        <h1><?php the_sub_field('media_title', 'options');?></h1>
                      </div>
                      <ul>
                        <li>Media type: <?php the_sub_field('media_type', 'options');?></li>
                        <li>Location: <?php the_sub_field('location', 'options');?></li>
                        <li>Date: <?php the_sub_field('date', 'options');?></li>
                      </ul>
                      <ul>
                        <li>Circ/Viewership: <?php the_sub_field('circ/viewership', 'options');?></li>
                        <li>Media Value: <?php the_sub_field('media_value', 'options');?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="itemCont"></div>
                </div>
              <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
    <div id="media_detail-wrapper-wrapper">
      <div id="media_detail-wrapper">
        <div id="media_detail">
          <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <path d="M8 17h7v7c0 0.6 0.4 1 1 1s1-0.4 1-1v-7h7c0.6 0 1-0.4 1-1s-0.4-1-1-1h-7V8c0-0.6-0.4-1-1-1s-1 0.4-1 1v7H8c-0.6 0-1 0.4-1 1S7.4 17 8 17z"></path>
                </svg>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_directory');?>/js/compiled-bundle.min.js" type="text/javascript"></script>
