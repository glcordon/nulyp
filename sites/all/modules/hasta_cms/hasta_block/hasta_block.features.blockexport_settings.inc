<?php
/**
 * @file
 * hasta_block.features.blockexport_settings.inc
 */

/**
 * Implements hook_default_blockexport_settings().
 */
function hasta_block_default_blockexport_settings() {
  $export = array();
  $export['block'][] = array(
  'bid' => 1,
  'module' => 'system',
  'delta' => 'main',
  'theme' => 'bartik',
  'status' => 1,
  'weight' => 0,
  'region' => 'content',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 2,
  'module' => 'user',
  'delta' => 'login',
  'theme' => 'bartik',
  'status' => 1,
  'weight' => 0,
  'region' => 'sidebar_first',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 3,
  'module' => 'system',
  'delta' => 'navigation',
  'theme' => 'bartik',
  'status' => 1,
  'weight' => 0,
  'region' => 'sidebar_first',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 4,
  'module' => 'system',
  'delta' => 'management',
  'theme' => 'bartik',
  'status' => 1,
  'weight' => 1,
  'region' => 'sidebar_first',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 5,
  'module' => 'system',
  'delta' => 'help',
  'theme' => 'bartik',
  'status' => 1,
  'weight' => 0,
  'region' => 'help',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 6,
  'module' => 'node',
  'delta' => 'syndicate',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 7,
  'module' => 'node',
  'delta' => 'recent',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 1,
);
  $export['block'][] = array(
  'bid' => 8,
  'module' => 'system',
  'delta' => 'powered-by',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 10,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 9,
  'module' => 'system',
  'delta' => 'user-menu',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 10,
  'module' => 'system',
  'delta' => 'main-menu',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'content/sitemap',
  'title' => '<none>',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 11,
  'module' => 'user',
  'delta' => 'new',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 1,
);
  $export['block'][] = array(
  'bid' => 12,
  'module' => 'user',
  'delta' => 'online',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 13,
  'module' => 'menu',
  'delta' => 'devel',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 14,
  'module' => 'tb_megamenu',
  'delta' => 'devel',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 15,
  'module' => 'tb_megamenu',
  'delta' => 'main-menu',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 16,
  'module' => 'tb_megamenu',
  'delta' => 'management',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 17,
  'module' => 'tb_megamenu',
  'delta' => 'navigation',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 18,
  'module' => 'tb_megamenu',
  'delta' => 'user-menu',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 19,
  'module' => 'devel',
  'delta' => 'execute_php',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 20,
  'module' => 'devel',
  'delta' => 'switch_user',
  'theme' => 'bartik',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 21,
  'module' => 'devel',
  'delta' => 'execute_php',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -11,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 22,
  'module' => 'devel',
  'delta' => 'switch_user',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -4,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 23,
  'module' => 'menu',
  'delta' => 'devel',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -12,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 24,
  'module' => 'node',
  'delta' => 'recent',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -6,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 1,
);
  $export['block'][] = array(
  'bid' => 25,
  'module' => 'node',
  'delta' => 'syndicate',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -3,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 26,
  'module' => 'system',
  'delta' => 'help',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -2,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 27,
  'module' => 'system',
  'delta' => 'main',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'content',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 28,
  'module' => 'system',
  'delta' => 'main-menu',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -13,
  'region' => -1,
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'content/sitemap',
  'title' => '<none>',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 29,
  'module' => 'system',
  'delta' => 'management',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -10,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 30,
  'module' => 'system',
  'delta' => 'navigation',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -9,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 31,
  'module' => 'system',
  'delta' => 'powered-by',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -8,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 32,
  'module' => 'system',
  'delta' => 'user-menu',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 6,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 33,
  'module' => 'tb_megamenu',
  'delta' => 'devel',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -1,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 34,
  'module' => 'tb_megamenu',
  'delta' => 'main-menu',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 35,
  'module' => 'tb_megamenu',
  'delta' => 'management',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 1,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 36,
  'module' => 'tb_megamenu',
  'delta' => 'navigation',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 2,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 37,
  'module' => 'tb_megamenu',
  'delta' => 'user-menu',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 3,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 38,
  'module' => 'user',
  'delta' => 'login',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 4,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 39,
  'module' => 'user',
  'delta' => 'new',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 8,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 1,
);
  $export['block'][] = array(
  'bid' => 40,
  'module' => 'user',
  'delta' => 'online',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 9,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 41,
  'module' => 'block',
  'delta' => 1,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -30,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 0,
  'pages' => 'node/64/header-style-2
node/64/header-style-3
node/64/header-style-4
node/64/header-style-5
node/64/menu-2
node/64/menu-3
node/64/menu-4
node/64/menu-5',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 42,
  'module' => 'commerce_cart',
  'delta' => 'cart',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -5,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => 'checkout*',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 43,
  'module' => 'comment',
  'delta' => 'recent',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => -7,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 1,
);
  $export['block'][] = array(
  'bid' => 44,
  'module' => 'views',
  'delta' => 'shop_columns-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 7,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 45,
  'module' => 'hybridauth',
  'delta' => 'hybridauth',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 5,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => 8,
);
  $export['block'][] = array(
  'bid' => 46,
  'module' => 'search',
  'delta' => 'form',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -15,
  'region' => 'sidebar',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '*sidebar
blog-node*
content/faq-style-*
content/careers',
  'title' => 'Search',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 47,
  'module' => 'views',
  'delta' => 'related_posts-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => 'Related Posts',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 48,
  'module' => 'views',
  'delta' => 'categories-block',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -16,
  'region' => 'sidebar',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '*sidebar
blog-node*
content/left-navigation
content/faq-style-*
content/careers',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 49,
  'module' => 'views',
  'delta' => 'latest_post_widget-block',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -14,
  'region' => 'sidebar',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '*sidebar
blog-node*
content/faq-style-*
content/careers',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 50,
  'module' => 'views',
  'delta' => 'tags-block',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -13,
  'region' => 'sidebar',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '*sidebar
blog-node*
content/faq-style-*
content/careers',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 51,
  'module' => 'views',
  'delta' => 'featured_works-block',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -12,
  'region' => 'sidebar',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '*sidebar
blog-node*
content/faq-style-*',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 52,
  'module' => 'block',
  'delta' => 2,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -29,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/header-style-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 53,
  'module' => 'block',
  'delta' => 3,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -28,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/header-style-3',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 54,
  'module' => 'block',
  'delta' => 4,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -27,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/header-style-4',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 55,
  'module' => 'block',
  'delta' => 5,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -26,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/menu-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 56,
  'module' => 'block',
  'delta' => 6,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -25,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/menu-3',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 57,
  'module' => 'block',
  'delta' => 7,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -24,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/menu-4',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 58,
  'module' => 'views',
  'delta' => 'people-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 59,
  'module' => 'views',
  'delta' => 'people_2-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 60,
  'module' => 'views',
  'delta' => 'people_3-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 61,
  'module' => 'views',
  'delta' => 'people_4-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 62,
  'module' => 'views',
  'delta' => 'blog_bordered_columns-block_1',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 63,
  'module' => 'md_slider',
  'delta' => 'home-corporative',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -21,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => '<front>
node/64*',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 64,
  'module' => 'block',
  'delta' => 8,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -22,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 0,
  'pages' => '<front>
node/31/fullwidth',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 65,
  'module' => 'block',
  'delta' => 9,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 0,
  'pages' => 'node/64/footer-dark-2
node/31/fullwidth
content/home-style-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 66,
  'module' => 'views',
  'delta' => 'tags-block_1',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 67,
  'module' => 'views',
  'delta' => 'recent_posts-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 68,
  'module' => 'views',
  'delta' => 'recent_posts-block_1',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 69,
  'module' => 'block',
  'delta' => 10,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/64/footer-dark-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 70,
  'module' => 'views',
  'delta' => 'shop_columns-block_1',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 71,
  'module' => 'md_slider',
  'delta' => 'shop-slider',
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -20,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/31/fullwidth',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 72,
  'module' => 'views',
  'delta' => 'featured_products_widget-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 73,
  'module' => 'block',
  'delta' => 11,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/31/fullwidth',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 74,
  'module' => 'views',
  'delta' => '9c8f0dfb2a39054c35ecd451395479ee',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 75,
  'module' => 'block',
  'delta' => 12,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 0,
  'pages' => 'node/31/fullwidth
content/home-style-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 76,
  'module' => 'block',
  'delta' => 13,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/31/fullwidth',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 77,
  'module' => 'block',
  'delta' => 14,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => 0,
  'region' => 'footer',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'content/home-style-2',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 78,
  'module' => 'views',
  'delta' => 'people_5-block',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 79,
  'module' => 'block',
  'delta' => 15,
  'theme' => 'hasta_sub',
  'status' => 1,
  'weight' => -23,
  'region' => 'top',
  'custom' => 0,
  'visibility' => 1,
  'pages' => 'node/34
node/36
node/37',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 80,
  'module' => 'menu',
  'delta' => 'features',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block'][] = array(
  'bid' => 81,
  'module' => 'tb_megamenu',
  'delta' => 'features',
  'theme' => 'hasta_sub',
  'status' => 0,
  'weight' => 0,
  'region' => -1,
  'custom' => 0,
  'visibility' => 0,
  'pages' => '',
  'title' => '',
  'cache' => -1,
);
  $export['block_custom'][] = array(
  'bid' => 1,
  'body' => '[nd_header_top text_left="Customer Care" text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="orange2"]
[social_icons_container type="2" size="tiny" color="dark" different_values="0" color2="toplist"]
[social_icon icon="fa fa-facebook" link="http://facebook.com" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-twitter" link="http://facebook.com" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-google-plus" link="http://facebook.com" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-linkedin" link="http://facebook.com" different_values="0"]
[/social_icon]
[/social_icons_container]
[/nd_header_top]
[nd_menu menu="main-menu" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="0"]
[/nd_menu]
 ',
  'info' => 'Header: Menu',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 2,
  'body' => '[nd_header_top text_right="Call Us: (888) 123-4567" login="1" register="1" different_values="0" bg_color="light" type="1" fid="46" phone_icon="1"]
[/nd_header_top]
[nd_menu menu="main-menu" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="1"]
[/nd_menu]
 ',
  'info' => 'Header: Menu Logo Left',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 3,
  'body' => '[nd_header_top text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="light" type="2" fid="46" phone_icon="0" text_left="Customer Care"]
[/nd_header_top]
[nd_menu menu="main-menu" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="1" button_title="Buy Now!" button_link="http://themeforest.net/user/nikadevs/portfolio"]
[/nd_menu]
 ',
  'info' => 'Header: Menu Logo Left 2',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 4,
  'body' => '[nd_header_top text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="light" type="3" fid="47" phone_icon="0" text_left="Customer Care"]
[/nd_header_top]
[nd_menu menu="main-menu" type="white" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="1" button_title="Buy Now!" button_link="http://themeforest.net/user/nikadevs/portfolio"]
[/nd_menu]
 ',
  'info' => 'Header: Menu Logo Centered',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 5,
  'body' => '[nd_header_top text_left="Customer Care" text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="orange2"]
[/nd_header_top]
[nd_menu menu="main-menu" type="dark" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="0"]
[/nd_menu]
 ',
  'info' => 'Header: Menu Dark',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 6,
  'body' => '[nd_header_top text_left="Customer Care" text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="orange2"]
[/nd_header_top]
[nd_menu menu="main-menu" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="1" button_title="Buy Now!" button_link="http://themeforest.net/user/nikadevs/portfolio"]
[/nd_menu]
 ',
  'info' => 'Header: Menu Left Align',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 7,
  'body' => '[nd_header_top text_left="Customer Care" text_right="(888) 123-4567" login="1" register="1" different_values="0" bg_color="orange2"]
[/nd_header_top]
[nd_menu menu="main-menu" transparent="0" stick_fixed="0" search="0" cart="0" language="0" different_values="0" no_logo="1" type="dark"]
[/nd_menu]
[nd_header breadcrumbs="1" different_values="0"]
[/nd_header]
 ',
  'info' => 'Header: Menu Dark No Logo',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 8,
  'body' => '[nd_header breadcrumbs="1" different_values="0"]
[/nd_header]
 ',
  'info' => 'Header: Title',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 9,
  'body' => '[nd_section extra_classes="section-dark sec-padding" different_values="0"]
[nd_container different_values="0"]
[row different_values="0"]
[col tablet="6" desktop="3" different_values="0" extra_classes="colmargin"]
[nd_div vertical_align="0" extra_classes="footer-logo" different_values="0"]
[nd_image fid="129" different_values="0"]
[/nd_image]
[/nd_div]
[html format="plain_text" p_classes="text" different_values="0"]<ul class="address-info"> <li>Address: No.28 - 63739 street lorem ipsum City, Country</li> <li><i class="fa fa-home"></i> Phone: + 1 (234) 567 8901</li> <li><i class="fa fa-phone"></i> Phone: + 1 (234) 567 8901</li> <li><i class="fa fa-fax"></i> Fax: + 1 (234) 567 8901</li> <li class="last"><i class="fa fa-envelope"></i> Email: support@yoursite.com </li> </ul>[/html]
[/col]
[col tablet="6" desktop="3" different_values="0" extra_classes="colmargin"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title less-mar3">Recent Posts</h4>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[nd_view admin_url="admin/structure/views/view/recent_posts/edit/block" different_values="0"]
[/nd_view]
[/col]
[col tablet="6" desktop="3" different_values="0" extra_classes="colmargin clearfix"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title less-mar3">Tags</h4>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[nd_view admin_url="admin/structure/views/view/tags/edit/block_1" different_values="0"]
[/nd_view]
[/col]
[col tablet="6" desktop="3" different_values="0" extra_classes="colmargin"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title less-mar3">useful links</h4>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[html format="plain_text" p_classes="text" different_values="0"]<div class="clearfix"></div> <ul class="usefull-links tex-left"> <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li> </ul>[/html]
[/col]
[/row]
[/nd_container]
[/nd_section]
 ',
  'info' => 'Footer Dark',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 10,
  'body' => '[nd_div vertical_align="0" extra_classes="section-dark sec-padding" different_values="0"]
[nd_container different_values="0"]
[row different_values="0"]
[col tablet="6" desktop="3" different_values="0"]
[nd_view admin_url="admin/structure/views/view/recent_posts/edit/block_1" different_values="0"]
[/nd_view]
[/col]
[col tablet="6" desktop="3" different_values="0"]
[/col]
[col tablet="6" desktop="3" different_values="0"]
[nd_node admin_url="node/91/edit" different_values="0"]
[/nd_node]
[/col]
[col tablet="6" desktop="3" different_values="0"]
[/col]
[/row]
[/nd_container]
[/nd_div]
 ',
  'info' => 'Footer Dark 2',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 11,
  'body' => '[nd_section extra_classes="section-light sec-padding" different_values="0"]
[nd_container different_values="0"]
[row different_values="0"]
[col tablet="6" desktop="3" different_values="0" extra_classes="clearfix"]
[nd_div vertical_align="0" extra_classes="footer-logo" different_values="0"]
[nd_image fid="128" different_values="0"]
[/nd_image]
[/nd_div]
[html format="html" p_classes="text" different_values="0"]<ul class="address-info-2"> <li>Address: No.28 - 63739 street lorem ipsum City, Country</li> <li><i class="fa fa-phone"></i> Phone: + 1 (234) 567 8901</li> <li><i class="fa fa-fax"></i> Fax: + 1 (234) 567 8901</li> <li><i class="fa fa-envelope"></i> Email: support@yoursite.com </li> <li><i class="fa fa-envelope"></i> Email: support@yoursite.com </li> </ul>[/html]
[/col]
[col tablet="6" desktop="3" different_values="0" extra_classes="clearfix"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title two less-mar3 roboto-slab">Featured</h4>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[nd_view admin_url="admin/structure/views/view/featured_products_widget/edit/block" different_values="0"]
[/nd_view]
[/col]
[col tablet="6" desktop="3" different_values="0"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title two less-mar3 roboto-slab">Quick Links</h4><br>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[html format="plain_text" p_classes="text" different_values="0"]<ul class="usefull-links-2"> <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li> <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li></ul>[/html]
[/col]
[col tablet="6" desktop="3" different_values="0"]
[html format="plain_text" p_classes="text" different_values="0"]<h4 class="uppercase footer-title two less-mar3 roboto-slab">Featured</h4>[/html]
[nd_div vertical_align="0" extra_classes="footer-title-bottomstrip" different_values="0"]
[/nd_div]
[nd_view admin_url="admin/structure/views/view/featured_products_widget/edit/block_1" different_values="0"]
[/nd_view]
[/col]
[/row]
[/nd_container]
[/nd_section]
 ',
  'info' => 'Footer Light',
  'format' => 'dynamic_shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 12,
  'body' => '[nd_section extra_classes="section-copyrights section-less-padding" different_values="0"]
[nd_container different_values="0"]
[row no_gutter="0" different_values="0"]
[col desktop="12" different_values="0"]
[social_icons_container type="2" size="large" color="dark" different_values="0"]
[social_icon icon="fa fa-twitter" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-facebook" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-google-plus" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-linkedin" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-dribbble" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-wordpress" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-android" different_values="0"]
[/social_icon]
[/social_icons_container]
[html format="plain_text" p_classes="text" different_values="0"]<br><span>Copyright © 2015 l yourdomain.com. All rights reserved.</span>[/html]
[/col]
[/row]
[/nd_container]
[/nd_section]
 ',
  'info' => 'Footer: Social links and Copyrights',
  'format' => 'shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 13,
  'body' => '[nd_section extra_classes="section-copyrights section-white-2 sec-moreless-padding" different_values="0"]
[nd_container different_values="0"]
[row no_gutter="0" different_values="0"]
[col desktop="5" extra_classes="bmargin" different_values="0"]
[logo_list type="payments" different_values="0"]
[logo_list_item last_logo="0" different_values="0" text="We Accept" style_margin_right="5"]
[/logo_list_item]
[logo_list_item last_logo="0" different_values="0" fid="130"]
[/logo_list_item]
[logo_list_item last_logo="0" different_values="0" fid="131"]
[/logo_list_item]
[logo_list_item last_logo="0" different_values="0" fid="132"]
[/logo_list_item]
[logo_list_item last_logo="0" different_values="0" fid="133"]
[/logo_list_item]
[logo_list_item last_logo="0" different_values="0" fid="134"]
[/logo_list_item]
[/logo_list]
[/col]
[col desktop="4" extra_classes="bmargin" different_values="0"]
[html format="plain_text" p_classes="text" different_values="0"]<span>Copyright © 2015 l yourdomain.com. All rights reserved.</span>[/html]
[/col]
[col desktop="3" extra_classes="bmargin" different_values="0"]
[social_icons_container type="2" size="large" color="dark" color2="dark-2" different_values="0"]
[social_icon icon="fa fa-twitter" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-facebook" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-google-plus" different_values="0"]
[/social_icon]
[social_icon icon="fa fa-linkedin" different_values="0"]
[/social_icon]
[/social_icons_container]
[/col]
[/row]
[/nd_container]
[/nd_section]
 ',
  'info' => 'Footer: Social links and Copyrights (Shop)',
  'format' => 'shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 14,
  'body' => '[nd_section extra_classes="section-copyrights sec-moreless-padding" different_values="0"]
[nd_container different_values="0"]
[row no_gutter="0" different_values="0"]
[col desktop="12" different_values="0"]
[html format="plain_text" p_classes="text" different_values="0"]<span>Copyright © 2015 l yourdomain.com. All rights reserved.</span>[/html]
[/col]
[/row]
[/nd_container]
[/nd_section]
 ',
  'info' => 'Footer: Copyrights',
  'format' => 'shortcodes',
);
  $export['block_custom'][] = array(
  'bid' => 15,
  'body' => '[parallax_background fid="160" ov_op="bg-opacity-5" different_values="0" style_height="248px"]
[nd_div vertical_align="1" different_values="0"]
[nd_title title="WE ARE HASTA" size="h4" font_color="text-white" uppercase="1" different_values="0" type="f30px700w"]
[/nd_title]
[nd_title title="Get Many More Features" size="h5" font_color="text-white" uppercase="1" different_values="0"]
[/nd_title]
[/nd_div]
[/parallax_background]
 ',
  'info' => 'Contact Parallax',
  'format' => 'dynamic_shortcodes',
);
return $export;
}
