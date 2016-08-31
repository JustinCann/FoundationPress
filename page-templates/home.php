<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div id="home-page" role="main">

  <?php do_action('daisy_before_content') ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>


    <section class="sevices">
      <?php// if ( != '' ) : ?>
        <?php
        $mods = get_theme_mods();
        // var_dump($mods);

        // echo  get_theme_mod( 'wpt_services_    block_elements',  );

        // echo $mods ["wpt_third_service_block_element"]
         ?>
      <?php// endif ?>

      <div class="large-3 medium-6 small-12 columns">
        <?php  echo  get_theme_mod( 'wpt_first_service_block_element')  ?>
      </div>
      <div class="large-3 medium-6 small-12 columns">
        <?php  echo  get_theme_mod( 'wpt_second_service_block_element')  ?>
      </div>
      <div class="large-3 medium-6 small-12 columns">
        <?php  echo  get_theme_mod( 'wpt_third_service_block_element')  ?>
      </div>
      <div class="large-3 medium-6 small-12 columns">
        <?php  echo  get_theme_mod( 'wpt_fourth_service_block_element')  ?>
      </div>
    </section>


  <?php endwhile;?>
  <?php do_action('daisy_after_content') ?>

</div>

<?php get_footer();
