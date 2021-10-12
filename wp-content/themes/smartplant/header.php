<?php wp_head(); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <?php the_custom_logo(); ?>
    <a class="navbar-brand" href="http://localhost:8090/17.wordpress/wordpress/">SmartPlant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu([
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto'
      ]); ?>
    </div>
  </div>
</nav>