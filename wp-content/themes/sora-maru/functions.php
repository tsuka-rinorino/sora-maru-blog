<?php

function register_my_menus() {
  register_nav_menu('footer-nav', 'フッターナビゲーション');
}
add_action('after_setup_theme', 'register_my_menus');
