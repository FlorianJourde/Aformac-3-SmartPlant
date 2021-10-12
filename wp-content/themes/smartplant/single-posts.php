<?php get_header(); ?>

<div class="container">

  <?php if(have_posts()):
    while(have_posts()):the_post(); ?>
      <h1 class="single-title"><?php the_title();?></h1>
          <img class="image" src="<?php the_post_thumbnail_url(); ?>">
          <p class="single-excerpt"><?php the_content();?></p>
    <?php endwhile;
  endif; ?>

</div>

<?php get_footer(); ?>