<?php
  $a_classes[] = $submenu ? ' dropdown-toggle' : '';
  $href = strpos($item['link']['href'], "_anchor_") !== false ? str_replace("http://_anchor_", '#', $item['link']['href']) : url($item['link']['href'], $item['link']['localized_options']);
  $classes = '';
  $classes .= strpos($item['link']['href'], "_anchor_") !== false ? ' local-scroll' : '';
  $classes .= $submenu && $item['link']['depth'] > 1 ? ' dropdown-submenu mul' : ($submenu ? ' dropdown' : '');
  $classes .= $item_config['alignsub'] ? ' align-menu-' . $item_config['alignsub'] : '';
  $title = (!empty($item_config['xicon']) ? '<i class="' . $item_config['xicon'] . '"></i> &nbsp; ' : '') . t($item['link']['link_title']);
?>
<?php if(!empty($item_config['caption'])) : ?>
  <li><p><?php print t($item_config['caption']);?></p></li>
<?php endif;?>
<li class="<?php print $classes;?>" <?php print $attributes;?>>
  <a href="<?php print in_array($item['link']['href'], array('<nolink>')) ? "#" : $href; ?>" class = "<?php print implode(', ', $a_classes);?>">
    <?php print $title; ?>
  </a>
  <?php print $submenu; ?>
</li>
