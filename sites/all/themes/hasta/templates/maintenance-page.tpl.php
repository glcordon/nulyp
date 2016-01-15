<!DOCTYPE html>
<?php 
  // In case then we show maintenance page in demo view
  if(!isset($site_name)) {
    template_preprocess_maintenance_page($variables);
    extract($variables);
  }
  nikadevs_cms_preprocess_html($variables);
  template_process_maintenance_page($variables);
  template_process($variables, '');
  extract($variables);
?>
<head>

  <?php print $head; ?>

  <title><?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php print $styles; ?>

</head>
<body class="maintenance-page <?php print $classes; ?>" <?php print $attributes;?> style = "<?php print $css; ?>">
  <div class = "overlay-class main-wrapper wrapper-wide full-height">

    <div class="container vertical-align">
      <div class="row">
        
        <div class="col-md-12">
          <div class="countdown_holder">
            <?php
              $coming_soon_content = theme_get_setting('coming_soon_content');
              print check_markup($coming_soon_content['value'], $coming_soon_content['format']);
            ?>
          </div>
          
        </div>
        
      </div>
    </div>

  </div>
  <?php print $scripts; ?>
</body>
