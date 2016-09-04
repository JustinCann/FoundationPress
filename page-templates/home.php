<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<main id="home-page" class="home-page" role="main">

  <?php do_action('daisy_before_content') ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>


    <section class="services">
      <div class="row" data-equalizer="service-text" data-equalize-on="medium">
        <div class="large-3 medium-6 small-12 columns">

          <section class="services">

            <div class="service-image">
              <img src="<?php echo get_theme_mod( 'wpt_first_services_block_image') ?>" alt="<?php echo get_theme_mod( 'wpt_first_services_block_heading') ?>" />
            </div>

            <div class="service-heading heading"><h4><?php echo get_theme_mod( 'wpt_first_services_block_heading') ?></h4></div>

            <div class="service-text" data-equalizer-watch="service-text">
              <p><?php echo get_theme_mod( 'wpt_first_services_block_textarea') ?></p>
            </div>

            <div class="read-more"><?php echo _e('Read more') ?></div>

          </section>

        </div>
        <div class="large-3 medium-6 small-12 columns">

          <section class="services">

            <div class="service-image">
              <img src="<?php echo get_theme_mod( 'wpt_second_services_block_image') ?>" alt="<?php echo get_theme_mod( 'wpt_second_services_block_heading') ?>" />
            </div>

            <div class="service-heading heading"><h4><?php echo get_theme_mod( 'wpt_second_services_block_heading') ?></h4></div>

            <div class="service-text" data-equalizer-watch="service-text">
              <p><?php echo get_theme_mod( 'wpt_second_services_block_textarea') ?></p>
            </div>

            <div class="read-more"><?php echo _e('Read more') ?></div>

          </section>

        </div>
        <div class="large-3 medium-6 small-12 columns">

          <section class="services">

            <div class="service-image">
              <img src="<?php echo get_theme_mod( 'wpt_third_services_block_image') ?>" alt="<?php echo get_theme_mod( 'wpt_third_services_block_heading') ?>" />
            </div>

            <div class="service-heading heading"><h4><?php echo get_theme_mod( 'wpt_third_services_block_heading') ?></h4></div>

            <div class="service-text" data-equalizer-watch="service-text">
              <p><?php echo get_theme_mod( 'wpt_third_services_block_textarea') ?></p>
            </div>

            <div class="read-more"><?php echo _e('Read more') ?></div>

          </section>

        </div>
        <div class="large-3 medium-6 small-12 columns">

          <section class="services">

            <div class="service-image">
              <img src="<?php echo get_theme_mod( 'wpt_fourth_services_block_image') ?>" alt="<?php echo get_theme_mod( 'wpt_fourth_services_block_heading') ?>" />
            </div>

            <div class="service-heading heading"><h4><?php echo get_theme_mod( 'wpt_fourth_services_block_heading') ?></h4></div>

            <div class="service-text" data-equalizer-watch="service-text">
              <p><?php echo get_theme_mod( 'wpt_fourth_services_block_textarea') ?></p>
            </div>

            <div class="read-more"><?php echo _e('Read more') ?></div>

          </section>

        </div>
      </div>
    </section>


  <?php endwhile;?>
  <?php do_action('daisy_after_content') ?>

</main>

<?php get_footer();
