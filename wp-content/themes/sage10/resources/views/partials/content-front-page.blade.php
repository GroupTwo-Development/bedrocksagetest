<section>
  <div class="container">
    @php(the_content())

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

  </div>
</section>
<section class="homepage">
  <div class="container">
    <h1>Home Page</h1>
  </div>
</section>

