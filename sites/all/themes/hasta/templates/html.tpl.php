<?php if(request_uri() == '/maintenance' && strpos($_SERVER['HTTP_HOST'], 'nikadevs') !== FALSE) { include('maintenance-page.tpl.php'); exit(); } ?>
<!DOCTYPE html>
<html  lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>

  <title><?php print $head_title; ?></title>
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic%7CRoboto+Slab:400,100,300,700%7CRoboto:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $styles; ?>
  
</head>
<body class="appear-animate <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class = "overlay-class main-wrapper <?php print $layout_width; ?>">
    <div class="site_wrapper">
      <?php print $page_top; ?>
      <?php print $page; ?>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <?php print $scripts; ?>
      <?php print $page_bottom; ?>
      <a href="#" class="scrollup" style="display: inline;"></a>
    </div>
  </div>

  <?php if(strpos($_SERVER['HTTP_HOST'], 'nikadevs') !== FALSE): ?>
    <link rel="stylesheet" type="text/css" href="<?php print base_path() . path_to_theme(); ?>/js/style-swicher/style-swicher.css" property='stylesheet' media = "all">
    <div id="style-selector" class="text-center"> <a href="javascript:void(0);" class="btn-close"><i class="fa fa-wrench"></i></a>
      <h5 class="title-big">Choose Theme Options</h5>
      <div class="style-selector-wrapper">
        <h5 class="title">Choose Layout</h5>
        <div class="clearfix"></div>
        <div class="layout-selector">
          <a class="btn-gray active" data-ref = "wide" href="#">Wide</a> <a class="btn-gray" data-ref = "boxed" href="#">Boxed</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <h5 class="title align-left">PREDEFINED SKINS</h5>
        <ul class="pre-colors-list">
          <li><a title="default" class = "active" href="<?php print base_path() . path_to_theme(); ?>/css/colors/default.css"><span class="pre-color-skin-1"></span></a></li>
          <li><a title="light blue" href="<?php print base_path() . path_to_theme(); ?>/css/colors/lightblue.css"><span class="pre-color-skin-2"></span></a></li>
          <li><a title="orange" href="<?php print base_path() . path_to_theme(); ?>/css/colors/orange.css"><span class="pre-color-skin-4"></span></a></li>
          <li><a title="green" href="<?php print base_path() . path_to_theme(); ?>/css/colors/green.css"><span class="pre-color-skin-3"></span></a></li>
          <li><a title="pink" href="<?php print base_path() . path_to_theme(); ?>/css/colors/pink.css"><span class="pre-color-skin-5"></span></a></li>
          <li class="last"><a title="red" href="<?php print base_path() . path_to_theme(); ?>/css/colors/red.css"><span class="pre-color-skin-6"></span></a></li>
          <li><a title="purple" href="<?php print base_path() . path_to_theme(); ?>/css/colors/purple.css"><span class="pre-color-skin-7"></span></a></li>
          <li><a title="bridge" href="<?php print base_path() . path_to_theme(); ?>/css/colors/bridge.css"><span class="pre-color-skin-8"></span></a></li>
          <li><a title="yellow" href="<?php print base_path() . path_to_theme(); ?>/css/colors/yellow.css"><span class="pre-color-skin-9"></span></a></li>
          <li><a title="violet" href="<?php print base_path() . path_to_theme(); ?>/css/colors/violet.css"><span class="pre-color-skin-10"></span></a></li>
          <li><a title="cyan" href="<?php print base_path() . path_to_theme(); ?>/css/colors/cyan.css"><span class="pre-color-skin-11"></span></a></li>
          <li class="last"><a title="moss green" href="<?php print base_path() . path_to_theme(); ?>/css/colors/mossgreen.css"><span class="pre-color-skin-12"></span></a></li>
        </ul>
        <h5 class="title align-left">bg patterns</h5>
        <ul class="bg-pattrens-list">
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-1.css"><span class="bg-pattren-1"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-2.css"><span class="bg-pattren-2"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-3.css"><span class="bg-pattren-3"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-4.css"><span class="bg-pattren-4"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-5.css"><span class="bg-pattren-5"></span></a></li>
          <li class="last"><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-6.css"><span class="bg-pattren-6"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-7.css"><span class="bg-pattren-7"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-8.css"><span class="bg-pattren-8"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-9.css"><span class="bg-pattren-9"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-10.css"><span class="bg-pattren-10"></span></a></li>
          <li><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-11.css"><span class="bg-pattren-11"></span></a></li>
          <li class="last"><a href="<?php print base_path() . path_to_theme(); ?>/css/bg-patterns/pattern-12.css"><span class="bg-pattren-12"></span></a></li>
        </ul>
      </div>
    </div>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/style-swicher/style-swicher.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/style-swicher/custom.js"></script>
  <?php endif; ?>
</body>
</html>