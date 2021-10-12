<?php get_header();

$var = get_queried_object();
var_dump($var);

?>

<div class="container">
  <div class="row">
    <?php if(have_posts()):
      while(have_posts()):the_post(); ?>
      <div class="col-6">
        <div class="card">
          <!-- <div class="card" style="width: 18rem;"> -->
          <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php the_title();?></h5>
              <p class="card-text"><?php the_excerpt();?></p>
              <a href="<?php the_permalink();?>" class="btn btn-primary">Voir l'article</a>
            </div>
          <!-- </div> -->
        </div>
      </div>
      <?php endwhile;
    endif ?>
  </div>
</div>

<?php
get_footer(); ?>