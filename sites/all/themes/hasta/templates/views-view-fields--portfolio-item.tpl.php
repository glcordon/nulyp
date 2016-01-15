<?php
/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
global $projects_categories;
$categories = array();
if(isset($row->field_field_categories) && !empty($row->field_field_categories)) {
  foreach($row->field_field_categories as $taxonomy) {
    $category = $taxonomy['raw']['taxonomy_term']->name;
    $category_id = $view->vid . '-' . $taxonomy['raw']['taxonomy_term']->tid;
    $projects_categories[$category_id] = $category;
    $categories[] = $category_id;
  }
}
$image = _get_node_field($row, 'field_field_image');
$path = isset($image[0]) ? $image[0]['raw']['uri'] : '';
$href = file_create_url($path);
$author = _views_field($fields, 'field_author');
$title = _views_field($fields, 'title');
?>
<div class="cbp-item <?php print implode(' ', $categories); ?>">
  <a href="<?php print $href; ?>" class="cbp-caption cbp-lightbox" data-title="<?php print $title; ?><br><?php print t('by') . ' ' . $author; ?>">
    <div class="cbp-caption-defaultWrap"> <?php print _views_field($fields, 'field_image'); ?> </div>
    <div class="cbp-caption-activeWrap">
      <div class="cbp-l-caption-alignLeft">
        <div class="cbp-l-caption-body">
          <div class="cbp-l-caption-title"><?php print $title; ?></div>
          <div class="cbp-l-caption-desc"><?php print t('by') . ' ' . $author; ?></div>
        </div>
      </div>
    </div>
  </a>
  <?php _print_views_fields($fields); ?>
</div>