<!-- navigation panel -->
<div id="header">
  <div class="container">
    <div class="navbar navbar-default yamm <?php print $color; ?>">
    
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <?php if(!$no_logo): ?>
          <a href="<?php print url('<front>'); ?>" class="navbar-brand"><img src="<?php print $logo; ?>" alt=""/></a> 
        <?php endif; ?>
      </div>
      
      <div id="navbar-collapse-grid" class="navbar-collapse collapse <?php print $no_logo ? '' : 'pull-right'; ?>">
        <?php if(module_exists('tb_megamenu')) {
            print theme('tb_megamenu', array('menu_name' => $menu));
          }
          else {
            $main_menu_tree = module_exists('i18n_menu') ? i18n_menu_translated_tree($menu) : menu_tree($menu);
            print drupal_render($main_menu_tree);
          }
          print $button;
        ?>
      </div>
    </div>
  </div>
</div>
<!--end menu-->
<div class="clearfix"></div>