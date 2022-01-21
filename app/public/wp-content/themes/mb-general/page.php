<?php 

get_header();

while(have_posts()) {
the_post(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title t-center"><?php the_title();?></h1>
        </div>
      </div>
    </div>

      <div class="container">
<?php the_content(); ?>
      </div>
    </div>

<?php
}
get_footer();
?> 