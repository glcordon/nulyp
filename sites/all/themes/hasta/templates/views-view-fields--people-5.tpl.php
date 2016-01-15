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
$links = array();
if(isset($row->field_field_social_links) && !empty($row->field_field_social_links)) {
  foreach($row->field_field_social_links as $link) {
    $links[] = array('title' => '<i class = "' . $link['raw']['title'] . '"></i>', 'href' => $link['raw']['url'], 'html' => TRUE);
  }
}
?>
<div class="team-holder15 two bmargin <?php print empty($fields['field_highlight']->content) ? '' : 'active'; ?>">
  <div class="team-member"><?php print _views_field($fields, 'field_image'); ?></div>
  <div class="info-box text-center">
    <h5 class="uppercase less-mar2"><?php print _views_field($fields, 'title'); ?></h5>
    <span class="text-orange-2"><?php print _views_field($fields, 'field_position'); ?></span> <br/>
    <br/>
    <?php print _views_field($fields, 'body'); ?>
  </div>
  <?php _print_views_fields($fields); ?>
</div>