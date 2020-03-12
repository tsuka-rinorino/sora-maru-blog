<?php get_header(); ?>

<article class="post">
  <header class="post__header">
    <div class="post__heading">
      <div class="logo">
        <a class="logo__link" href="#">
          <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="">
        </a>
      </div>

      <h1 class="heading">
        Mああああああああああああああああああああ
      </h1>

      <div class="post__meta">
        <time class="post__date">2020-03-03</time>
        <div class="category">
          <ul class="category__list">
            <li class="category__item">
              <a class="category__link" href="#">HTML</a>
            </li>
            <li class="category__item">
              <a class="category__link" href="#">CSS</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="post__body">
    <p>
      この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
    </p>
    <p>
      この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>
      この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
    </p>
  </div>

  <footer class="post__footer">
    <div class="tags">
      <ul class="tags__list">
        <li class="tags__item">
          <a class="tags__link" href="#">#HTML</a>
        </li>
        <li class="tags__item">
          <a class="tags__link" href="#">#CSS</a>
        </li>
      </ul>
    </div>

    <div class="author">
      <div class="author__avatar">
        <img class="author__img" src="https://placehold.jp/150x150.png" alt="">
      </div>
      <div class="author__body">
        <div class="author__name">
          りの
        </div>
        <div class="author__profile">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
        </div>
      </div>
    </div>
  </footer>
</article>

<?php get_footer(); ?>
