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
<div class="team-holder2 bmargin <?php print empty($fields['field_highlight']->content) ? '' : 'active'; ?>">
  <div class="img-holder">
    <div class="icon-box">
      <?php print $links ? theme('links', array('links' => $links, 'attributes' => array('class' => 'social-icons-1'))) : '';?>
    </div>
    <?php print _views_field($fields, 'field_image'); ?>
  </div>
  <div class="content-box less-pading text-center">
    <h5 class="nomargin title"><?php print _views_field($fields, 'title'); ?></h5>
    <h6 class="text-orange-2 nopadding"><?php print _views_field($fields, 'field_position'); ?></h6>
    <br>
    <?php print _views_field($fields, 'body'); ?>
  </div>
</div>

<?php _print_views_fields($fields); ?>