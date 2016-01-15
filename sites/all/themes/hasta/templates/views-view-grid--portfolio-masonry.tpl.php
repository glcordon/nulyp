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
<div class="demo-masonry <?php print $class; ?>">
  <div class="cbp-panel">

    <?php if(!empty($projects_categories)) : ?>
      <div id="filters-container" class="cbp-l-filters-button two three text-right">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> <?php print t('Show All'); ?>
          <div class="cbp-filter-counter"></div>
        </div>
        <?php  foreach($projects_categories as $id => $category): ?>
        <div data-filter=".<?php print $id; ?>" class="cbp-filter-item"> <?php print $category; ?>
          <div class="cbp-filter-counter"></div>
        </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <br><br>
    
    <div id="grid-container" class="cbp-l-grid-masonry-projects" data-columns = "<?php print $columns; ?>">
      <?php foreach ($rows as $row_number => $columns): ?>
        <?php foreach ($columns as $column_number => $item): ?>
          <?php print $item; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>

  </div>
</div>