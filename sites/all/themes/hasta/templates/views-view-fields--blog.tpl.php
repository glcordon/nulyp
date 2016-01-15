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
$nid = _views_field($fields, 'nid');
?>
<?php print _views_field($fields, 'field_image'); ?>
<div class="clearfix"></div>
<br>
<?php print _views_field($fields, 'title'); ?>

<div class="blog-post-info"> <span><i class="fa fa-user"></i> <?php print t('By'); ?> <?php print _views_field($fields, 'name'); ?></span> <span><i class="fa fa-comments-o"></i> <?php print _views_field($fields, 'comment_count'); ?> <?php print t('Comments'); ?></span> </div>
<br>
<?php _print_views_fields($fields); ?>
<br>
<a class="btn btn-border light btn-round btn-small" href="<?php print url('node/' . $nid); ?>"><?php print t('Read more'); ?></a>