<div class="error_holder">
  <h1 class="uppercase title text-orange-2">404</h1>
  <br>
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