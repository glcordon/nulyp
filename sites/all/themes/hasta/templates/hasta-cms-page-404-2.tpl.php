<div class="row">
      
  <div class="col-md-8 col-sm-12 col-xs-12 text-left">
    <div class="error_holder two bmargin">
    <h2 class="uppercase"><?php print t('Oops... Page Not Found!'); ?></h2>
    <p><?php print t('Sorry the Page Could not be Found here. Try using the button below to go to main page of the site'); ?></p>
    <br>
    <br>
    <br>
    <?php
      $search_form_box = module_invoke('search', 'block_view');
      print render($search_form_box);
    ?>
  </div>
  </div>
  <!--end item-->
  
  
  <div class="col-md-4 col-sm-12 col-xs-12 bmargin">
  <br>
    <h1 class="uppercase error-title-big text-orange-2">404</h1>
  </div>
  <!--end item-->

  </div>