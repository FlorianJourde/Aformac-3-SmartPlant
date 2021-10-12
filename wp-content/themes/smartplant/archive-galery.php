<?php get_header(); ?>

<div class="container">
  <div>
    <h3 class="page-title">Galerie</h1>
  </div>
  <div class="row">
    <?php if(have_posts()):
      while(have_posts()):the_post(); ?>
      <div class="col-3">
        <div class="card-galery">
              <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
              </a>
        </div>
      </div>
      <?php endwhile;
    endif ?>
  </div>
</div>

<?php get_footer(); ?>