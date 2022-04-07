<section>
  <div class="container">
    <?php (the_content()); ?>

    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


  </div>
</section>
<section class="homepage">
  <div class="container">
    <h1>Home Page</h1>
  </div>
</section>

<?php /**PATH /Users/grouptwodev/code/site/wp-content/themes/sage10/resources/views/partials/content-front-page.blade.php ENDPATH**/ ?>