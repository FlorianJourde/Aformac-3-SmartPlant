<?php get_header(); ?>

<div class="container">

  <?php if(have_posts()):
    while(have_posts()):the_post(); ?>
      <h1 class="single-title"><?php the_title();?></h1>
          <img class="single-galery" src="<?php the_post_thumbnail_url(); ?>">
    <?php endwhile;
  endif; ?>

</div>

<?php get_footer(); ?>