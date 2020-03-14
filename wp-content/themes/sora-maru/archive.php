<?php
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('',false);
  } elseif (is_tag()) {
    $title = single_tag_title('',false);
  } elseif (is_tax()) {
    $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }

  return $title;
});
?>
<?php get_header(); ?>


<div class="posts">
  <header class="posts__header">
    <div class="logo">
      <a class="logo__link" href="<?php echo home_url() ?>">
        <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="そらまる">
      </a>
    </div>
  </header>

  <?php the_archive_title( '<h1 class="heading--1">', '</h1>' ); ?>

  <div class="posts__list">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="posts__item">
        <a class="posts__link" href="<?php the_permalink(); ?>">
          <h2 class="posts__title"><?php the_title(); ?></h2>
          <footer class="posts__footer">
            <time class="posts__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y-m-d'); ?></time>
            <div class="tags">
              <ul class="tags__list">
                <?php
                  $tags = get_the_tags();
                  if ($tags) {
                    foreach($tags as $tag) {
                      echo '<li class="tags__item"><span class="tags__no-link">' . $tag->name . '</span></li>';
                    }
                  }
                ?>
              </ul>
            </div>
          </footer>
        </a>
      </article>
    <?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>
