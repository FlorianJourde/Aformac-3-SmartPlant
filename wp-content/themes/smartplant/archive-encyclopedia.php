<?php get_header(); ?>

<div class="container">
  <div>
    <h3 class="page-title">Encyclopédie</h1>
  </div>
  <div class="row">
    <?php if(have_posts()):
      while(have_posts()):the_post(); ?>
      <div class="col-6">
        <div class="card-encyclopedia">
          <div class="row">
            <div class="col-5">
              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-7">
              <h5 class="card-title"><?php the_title();?></h5>
              <?php the_excerpt();?>
              <a href="<?php the_permalink();?>" class="btn btn-success">Plus d'informations</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;
    endif ?>
  </div>
</div>

<?php get_footer(); ?>