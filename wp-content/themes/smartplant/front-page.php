<?php get_header(); ?>

<div>
  <img class="background-image" src="<?php echo get_theme_root_uri() ?>/smartplant/images/wallhaven-5wk153.jpg" alt="">
  <h1 class="text-header">Découvre ta flore locale !</h1>
</div>

<div class="container">
  <div class="page">
    <?php
    $args_encyclopedia = [
      'post_type' => 'encyclopedia', 
      'posts_per_page' => 4,
      ];

    $args_posts = [
      'post_type' => 'posts', 
      'posts_per_page' => 1,
      ];

    $args_galery = [
      'post_type' => 'galery', 
      'posts_per_page' => 8,
      ];

    $query_encyclopedia = new WP_Query( $args_encyclopedia );
    $query_post = new WP_Query( $args_posts );
    $query_galery = new WP_Query( $args_galery );
    ?>

    <h3 class="front-title">Encyclopédie</h3>
    <div class="row">
    <?php
    if($query_encyclopedia->have_posts()):
      while($query_encyclopedia->have_posts()):$query_encyclopedia->the_post(); ?>
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
        wp_reset_postdata();
      endif; ?>
    </div>

    <h3 class="front-title">Dernier article</h3>
    <div class="row">
    <?php
    if($query_post->have_posts()):
      while($query_post->have_posts()):$query_post->the_post(); ?>
      <div class="col">
          <div class="card-posts">
            <div class="row">
              <div class="col-5">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
              </div>
              <div class="col-7">
                <h5 class="card-title"><?php the_title();?></h5>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn btn-success">Lire l'article</a>
              </div>
            </div>
          </div>
      </div>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
      </div>

  <h3 class="front-title">Nouvelles images de la galerie</h3>
  <div class="row">
    <?php
    if($query_galery->have_posts()):
      while($query_galery->have_posts()):$query_galery->the_post(); ?>
      <div class="col-3">
        <div class="card-galery">
              <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
              </a>
        </div>
      </div>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</div>

<div>
  <img class="background-image-bottom" src="<?php echo get_theme_root_uri() ?>/smartplant/images/wallhaven-5wk153.jpg" alt="">
</div>

<?php get_footer(); ?>