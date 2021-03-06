<?php get_header(); ?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>);"></div>
<div class="page-banner__content container t-center c-white">
  <h1 class="headline headline--medium">Oyova Project</h1>
  <h2 class="headline headline--small">I hope you like it!</h2>
</div>
</div>

<div class="container container--narrow page-section">
      <h2 class="headline headline--small-plus">Employee of the Month:</h2> 
      <?php 
    
      $staffPosts = new WP_Query(array(
        'post_type' => 'staff',
        'posts_per_page' => 1,
        'meta_key' => 'employee_of_the_month',
        'orderby' => 'meta_value',
        'order' => 'ASC',
      ));

      while($staffPosts->have_posts()) {
        $staffPosts->the_post(); ?>
        <h3 class="headline headline--small-plus">
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h3>
        <div class="staff-card"><?php the_post_thumbnail(); ?></div>
       
<?php    
      }
?>     

<div class="container container--narrow page-section">
      <h2 class="headline headline--small-plus">From the Blog:</h2>
      <?php 
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 2
      ));

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>
           <div class="event-summary">
        <a class="event-summary__date event-summary__date--blue t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month"><?php
          the_time('M');
          ?></span>
          <span class="event-summary__day"><?php
          the_time('d');
          ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
          <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
        </div>
      </div>
      </div>
      
<?php 
} 
get_footer();
?>



