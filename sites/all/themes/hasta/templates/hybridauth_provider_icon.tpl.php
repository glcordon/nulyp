<?php $replace_provider = array('google' => 'google-plus'); 
  $provider = strtolower($provider_name);
  $class = isset($replace_provider[$provider]) ? $replace_provider[$provider] : $provider; ?>
<span><i class = "fa fa-<?php print $class; ?>"></i></span> <?php print $provider_name; ?>