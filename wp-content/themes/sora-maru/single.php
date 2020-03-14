<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="post">
    <header class="post__header">
      <div class="post__heading">
        <div class="logo">
          <a class="logo__link" href="<?php echo home_url() ?>">
            <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="">
          </a>
        </div>

        <h1 class="heading">
          <?php the_title(); ?>
        </h1>

        <div class="post__meta">
          <time class="post__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y-m-d'); ?></time>
          <div class="category">
            <?php the_category(); ?>
          </div>
        </div>
      </div>
    </header>

    <div class="post__body">
      <?php
        if (get_field('html_code')) {
          echo '<div class="code-block code-block--html">';
          echo '<div class="code-block__title">サンプル</div>';
          echo get_field('html_code');
          echo '</div>';
        }
      ?>

      <?php the_content(); ?>

      <?php
        if (get_field('css_code')) {
          echo '<style class="code-block code-block--css">';
          echo get_field('css_code');
          echo '</style>';
        }
      ?>
    </div>

    <footer class="post__footer">
      <div class="tags">
        <?php the_tags( '<ul class="tags__list"><li class="tags__item">', '</li><li class="tags__item">', '</li></ul>' ); ?>
      </div>

      <div class="author">
        <?php
          $blogusers = get_users();
          $author = get_the_author_meta('id');
          $author_img = get_avatar($author);
        ?>
        <div class="author__avatar">
          <?php echo $author_img ?>
        </div>
        <div class="author__body">
          <div class="author__name">
            <?php echo $blogusers[0]->display_name; ?>
          </div>
          <div class="author__profile">
            <?php echo $blogusers[0]->description; ?>
          </div>
        </div>
      </div>
    </footer>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
