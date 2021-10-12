<?php get_header(); ?>

<div class="container">
  <?php if(have_posts()):
    while(have_posts()):the_post(); ?>
    <div class="row">
      <div class="col-8">
        <h1 class="single-title"><?php the_title();?></h1>
      </div>
      <div class="col-4">
        <p class="single-family">Famille : <a href="https://fr.wikipedia.org/wiki/<?php the_field('family');?>"><?php the_field('family');?></a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <?php the_content();?>
      </div>
      <div class="col-4">
        <img class="image" src="<?php the_post_thumbnail_url(); ?>">
      </div>
    </div>
    <?php endwhile;
  endif; ?>
</div>

<?php get_footer(); ?>