<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
$columns = isset($view->style_plugin->options['columns']) ? $view->style_plugin->options['columns'] : 3;
global $projects_categories;
$class = isset($column_classes[0][0]) ? $column_classes[0][0] : '';
?>
<div class="demo-slider-projects <?php print $class; ?>">
  <div class="cbp-l-slider-title-block">
    <div><?php print t($view->query->pager->display->handler->default_display->display->display_options['title']); ?></div>
  </div>
  <div id="grid-container" class="cbp-l-grid-projects slider-portfolio" data-columns = "<?php print $columns; ?>">
  <?php foreach ($rows as $row_number => $columns): ?>
    <?php foreach ($columns as $column_number => $item): ?>
      <?php print $item; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </div>
</div>