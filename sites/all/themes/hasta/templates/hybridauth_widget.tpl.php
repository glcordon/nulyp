<div class="hybridauth-widget-wrapper">
  <div class="spacer-b30">
    <div class="tagline"><span><?php print t($element['#title']); ?> </span></div>
  </div>
  <div class = "section">
    <?php
      foreach ($providers as $value) {
        print $value . ' ';
      }
    ?>    
  </div>
</div>