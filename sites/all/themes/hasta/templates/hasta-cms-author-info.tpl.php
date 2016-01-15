<?php $user = user_load($node->uid); $info = _get_node_field($user, 'field_info'); ?>

<div class="blog1-post-info-box mt-30">
  <div class="text-box border padding-3">

    <div class="iconbox-medium left round overflow-hidden">
      <?php if(isset($user->picture->uri)): ?>
        <?php print theme('image', array('path' => $user->picture->uri, array('attributes' => array('class' => array('img-responsive'))))); ?>
      <?php endif;?>
    </div>
    <div class="text-box-right more-padding-2">
      <h4><?php print $user->name; ?></h4>
      <?php print $info[0]['safe_value']; ?>
      <br>
      <?php print l('Read More', 'user/' . $user->uid, array('attributes' => array('class' => array('btn', 'btn-border', 'orange-2', 'btn-small-2')))); ?>
    </div>
  </div>
</div>

<div class="clearfix"></div>