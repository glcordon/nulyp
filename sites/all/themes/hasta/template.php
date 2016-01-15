<?php

function _count_comments($val) {
  return isset($val['#comment']);
}

function _views_field(&$fields, $field) {
  if(isset($fields[$field]->content)) {
    $output = $fields[$field]->content;
    unset($fields[$field]);
    return $output;
  }
}

function _print_views_fields($fields, $exceptions = array()) {
  //global $one; if(!$one) { dpm($fields); $one = 1; }

  foreach ($fields as $field_name => $field) {
    if (!in_array($field_name, $exceptions)) {
      print $field->content;
    }
  }
}

function hasta_image_style($variables) {
  $variables['alt'] = empty($variables['alt']) ? 'Alt' : '';
  $variables['attributes']['class'][] = 'img-responsive';
  return theme_image_style($variables);
}

function hasta_image($variables) {
  $variables['alt'] = empty($variables['alt']) ? 'Alt' : '';
  $variables['attributes']['class'][] = 'img-responsive';
  return theme_image($variables);
}


/**
 * Implementation of hook_preprocess_html().
 */
function hasta_preprocess_html(&$variables) {

  $get_value = isset($_GET['skin']) ? $_GET['skin'] : '';
  if(!$get_value) {
    $args = arg();
    $get_value = array_pop($args);
  }
  $skins = array('default', 'bridge', 'cyan', 'green', 'lightblue', 'mossgreen', 'orange', 'pink', 'purple', 'red', 'violet', 'yellow');
  // Allow to override the skin by argument
  $skin = in_array($get_value, $skins) ? $get_value : theme_get_setting('skin');
  if($skin && $skin != 'default') {
    drupal_add_css(drupal_get_path('theme', 'hasta') . '/css/colors/' . $skin . '.css', array('group' => CSS_THEME));
  }
  $layout_width = theme_get_setting('layout_width');
  $variables['layout_width'] = theme_get_setting('layout_width');

  if (theme_get_setting('layout_width') == 'wrapper-boxed' && theme_get_setting('bg_image')) {
    $variables['classes_array'][] = theme_get_setting('bg_image');
  }

  drupal_add_css(drupal_get_path('theme', 'hasta_sub') . '/css/custom.css', array('group' => CSS_THEME));
  if(theme_get_setting('retina')) {
    drupal_add_js(drupal_get_path('theme', 'hasta') . '/js/jquery.retina.js');
  }
  if(theme_get_setting('custom_css')) {
    drupal_add_css(theme_get_setting('custom_css'), array('type' => 'inline', 'group' => CSS_THEME));
  }
  drupal_add_js(array(
    'theme_path' => drupal_get_path('theme', 'hasta'),
    'base_path' => base_path(),
  ), 'setting');
}

/**
 * Overrides theme_menu_tree().
 */
function hasta_menu_tree(&$variables) {
  return '<ul class = "sitemap">' . $variables['tree'] . '</ul>';
}

/**
 * Overrides theme_menu_tree().
 */
function stig_menu_tree__main_menu(&$variables) {
  return $variables['tree'];
}

function hasta_menu_link(array $variables) {

  $element = $variables['element'];
  $sub_menu = '';

  if (strpos($element['#href'], "_anchor_") !== false) {
    $element['#localized_options']['attributes']['data-scroll-to'] = str_replace("http://_anchor_", '#', $element['#href']);
    $element['#href'] = str_replace("http://_anchor_", '//' . $_SERVER['HTTP_HOST'] . request_uri() . '#', $element['#href']);
  }

  if ($element['#below']) {
    $element['#localized_options']['attributes']['class'][] = 'mn-has-sub';
    $element['#title'] = '<i class="fa fa-caret-right"></i> ' . $element['#title'];
    unset($element['#below']['#theme_wrappers']);
    $sub_menu = '<ul class = "mn-sub">' . drupal_render($element['#below']) . '</ul>';
  }
  $element['#localized_options']['html'] = TRUE;
  if(isset($element['#localized_options']['attributes']['class']) && in_array('active-trail', $element['#localized_options']['attributes']['class'])) {
    $element['#localized_options']['attributes']['class'][] = 'active';
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li>' . $output . $sub_menu . "</li>\n";
}

/**
 * Overrides theme_menu_local_tasks().
 */
function hasta_menu_local_tasks(array $variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<div class = "align-center mb-40 mb-xxs-30"><ul class="nav nav-tabs tpl-minimal-tabs">';
    $variables['primary']['#suffix'] = '</ul></div>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<div class = "align-center mb-40 mb-xxs-30"><ul class="nav nav-tabs tpl-minimal-tabs">';
    $variables['secondary']['#suffix'] = '</ul></div>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

/**
 * Theme function to render a container full of share links (for a node).
 */
function hasta_social_share_links($variables) {
  $content = theme_social_share_links($variables);
  unset($content['#prefix'], $content['#suffix']);
  $output = '';
  global $language;
  $label = variable_get('social_share_label', NULL);
  $label_enabled = variable_get('social_share_show_label_' . $variables['node']->type, FALSE);
  if (is_array($label) && $label_enabled) {
    $output .= '<h4 class="less-mar3 block-title"><a href="#">' . ((isset($label[$language->language])) ? $label[$language->language] : '') . '</a></h4>';
  }
  switch($variables['node']->type) {
    case 'product_display':
      $style_class = 'product-info-socialicons';
      break;
    default:
      $style_class = 'social-icons-2';
      break;   
  }
  $output .= '<br><ul class="' . $style_class . '">
    ' . implode(' ', $content) . ' 
  </ul>';
  $content = array('#markup' => $output);
  return $content;
}

/**
 * Theme function to render a single social share link (for a node)
 */
function hasta_social_share_link($variables) {
  $link = theme_social_share_link($variables);
  $social = str_replace(' ', '-', strtolower($link['#title']));
  $icon = '<i class = "fa fa-' . $social . '"></i>';
  $link_options = $link['#options'];
  $link_options['html'] = TRUE;
  $link_options['attributes']['class'] = $social;
  $link_output = l($icon, $link['#href'], $link_options);
  return '<li>' . $link_output . '</li>';
}

function hasta_fivestar_static($variables) {
  $rating  = $variables['rating'] / 20;
  $output = '';
  for($i = 1; $i <= 5; $i++) {
    $output .= $rating >= $i ? '<span><i class="fa fa-star"></i></span>' : ($rating + 0.5 >= $i ? '<span><i class="fa fa-star-half-o"></i></span>' : '<span><i class="fa fa-star-o"></i></span>');
  }
  $output .= '<br/>';
  return $output;
}

/**
 * Display a static fivestar value as stars with a title and description.
 */
function hasta_fivestar_static_element($variables) {
  return $variables['star_display'];
}

/**
 * Update status messages
*/
function stig_status_messages($variables) {
  $display = $variables['display'];
  $output = '<div class = "row"><div class = "col-md-8 col-md-offset-2">';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );
  $types = array(
    'status' => 'success',
    'error' => 'error',
    'warning' => 'notice',
  );
  $icons = array(
    'status' => 'check-circle-o',
    'error' => 'fa-exclamation-triangle',
    'warning' => 'fa-times-circle',
  ); 
  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"alert " . $types[$type] . "\">\n<i class=\"fa fa-lg fa-" . $icons[$type] . "\"></i>";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      foreach ($messages as $message) {
        $output .= '<p>' . $message . "</p>\n";
      }
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  $output .= '</div></div>';
  return $output;
}

/**
 * Implementation of hook_css_alter().
 */
function stig_css_alter(&$css) {
  // Disable standart css from ubercart
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.messages.css']);
  //unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
  unset($css[drupal_get_path('module', 'search') . '/search.css']);
}



/**
 * Implements hook_preprocess_button().
 */
function hasta_preprocess_button(&$vars) {
  $medium_buttons = array(t('Submit'), t('Save'), t('Preview'));
  if(in_array($vars['element']['#value'], $medium_buttons)) {
    $vars['element']['#attributes']['class'][] = 'btn-medium';
  }
  elseif (!isset($vars['element']['#attributes']['class']) || (!in_array('btn-large', $vars['element']['#attributes']['class'])) && !in_array('btn-medium', $vars['element']['#attributes']['class'])) {
    $vars['element']['#attributes']['class'][] = 'btn-small';
  }

  $vars['element']['#attributes']['class'][] = 'btn';
  if ($vars['element']['#value'] == '<none>') {
    $vars['element']['#attributes']['class'][] = 'hidden';
  }
}

/**
 * Implements hook_button().
 */
function hasta_button($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'form-button-disabled';
  }

  if(!in_array('btn-color-set', $element['#attributes']['class'])) {
    $element['#attributes']['class'][] = 'btn-red-4';
  }
  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}

/**
 * Update breadcrumbs
*/
function hasta_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {

    if (!drupal_is_front_page() && !empty($breadcrumb)) {
      $node_title = filter_xss(menu_get_active_title(), array());
      $breadcrumb[] = t($node_title);
    }
    if (count($breadcrumb) > 1) {
      $output = '<div class="pagenation_links">';
      $output .= implode(' <i> / </i> ', $breadcrumb);
      $output .= '</div>';
      return $output;
    }
  }
}

/**
 * Implements hook_preprocess_form().
 */
function hasta_preprocess_form(&$variables) {
  $variables['element']['#attributes']['class'][] = 'smart-forms';
}

/**
 * Implements hook_preprocess_table().
 */
function stig_preprocess_table(&$variables) {
  //dpm($variables);
  //$variables['element']['#attributes']['class'][] = 'form';
}


/**
 * Implements hook_element_info_alter().
 */
function hasta_element_info_alter(&$elements) {
  foreach ($elements as &$element) {
    if (!empty($element['#input'])) {
      $element['#process'][] = '_hasta_process_input';
    }
  }
}

function _hasta_process_input(&$element, &$form_state) {
  $types = array(
    'textarea',
    'textfield',
    'webform_email',
    'webform_number',
    'select',
    'password',
    'password_confirm',
  );
  if (!empty($element['#type']) && (in_array($element['#type'], $types))) {
    if (isset($element['#title']) && $element['#title_display'] != 'none' && $element['#type'] != 'select') {
      $element['#attributes']['placeholder'] = $element['#title'];
      $element['#title_display'] = 'none';
    }
  }

  return $element;
}

/**
 *  Implements theme_textfield().
 */
function hasta_textfield($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = isset($element['#attributes']['type']) ? $element['#attributes']['type'] : 'text';
  if(!isset($element['#attributes']['class']) || !is_array($element['#attributes']['class']) || !in_array('class-lock', $element['#attributes']['class'])) {
    $element['#attributes']['class'][] = 'gui-input';
  }
  element_set_attributes($element, array(
    'id',
    'name',
    'value',
    'size',
    'maxlength',
  ));
  $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
  $extra = '';
  if ($element['#autocomplete_path'] && drupal_valid_path($element['#autocomplete_path'])) {
    drupal_add_library('system', 'drupal.autocomplete');
    $element['#attributes']['class'][] = 'form-autocomplete';
    $attributes = array();
    $attributes['type'] = 'hidden';
    $attributes['id'] = $element['#attributes']['id'] . '-autocomplete';
    $attributes['value'] = url($element['#autocomplete_path'], array('absolute' => TRUE));
    $attributes['disabled'] = 'disabled';
    $attributes['class'][] = 'autocomplete';
    $output = '<div class="input-group">' . $output . '<span class="input-group-addon"><i class = "fa fa-refresh"></i></span></div>';
    $extra = '<input' . drupal_attributes($attributes) . ' />';
  }

  foreach ($element['#attributes']['class'] as $i => $class) {
    if (strpos($class, 'fa-') !== FALSE) {
      $element['#nd_icon'] = 'fa ' . $class;
      unset($element['#attributes']['class'][$i]);
    }
  }
  $output .= $extra; 
  if(isset($element['#nd_icon'])) {
    $output = '<label class = "field prepend-icon">' . $output .  '<span class = "field-icon"><i class="' . $element['#nd_icon'] . '"></i></span></label>';
  }
  $output = '<div class = "section">' . $output . '</div>';
  return $output;
}


/**
 * Theme function to render an email component.
 */
function hasta_webform_email($variables) {
  $element = $variables['element'];

  // This IF statement is mostly in place to allow our tests to set type="text"
  // because SimpleTest does not support type="email".
  if (!isset($element['#attributes']['type'])) {
    $element['#attributes']['type'] = 'email';
  }
  if(!in_array('email_input', $element['#attributes']['class'])) {
    $element['#attributes']['class'][] = 'gui-input';
  }

  // Convert properties to attributes on the element if set.
  foreach (array('id', 'name', 'value', 'size') as $property) {
    if (isset($element['#' . $property]) && $element['#' . $property] !== '') {
      $element['#attributes'][$property] = $element['#' . $property];
    }
  }
  _form_set_class($element, array('form-text', 'form-email'));

  foreach ($element['#attributes']['class'] as $i => $class) {
    if (strpos($class, 'fa-') !== FALSE) {
      $element['#nd_icon'] = 'fa ' . $class;
      unset($element['#attributes']['class'][$i]);
    }
  }
  $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
  if(isset($element['#nd_icon'])) {
    $output = '<label class = "field prepend-icon">' . $output .  '<span class = "field-icon"><i class="' . $element['#nd_icon'] . '"></i></span></label>';
  }

  return $output;
}

/**
 *  Implements theme_password().
 */
function hasta_password($variables) {
 $element = $variables['element'];
  $element['#attributes']['type'] = 'password';
  $element['#attributes']['class'][] = 'gui-input';
  element_set_attributes($element, array('id', 'name', 'size', 'maxlength'));

  _form_set_class($element, array('form-control', 'input-md', 'round'));
  foreach ($element['#attributes']['class'] as $i => $class) {
    if (strpos($class, 'fa-') !== FALSE) {
      $element['#nd_icon'] = 'fa ' . $class;
      unset($element['#attributes']['class'][$i]);
    }
  }
  $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
  if(isset($element['#nd_icon'])) {
    $output = '<label class = "field prepend-icon">' . $output .  '<span class = "field-icon"><i class="' . $element['#nd_icon'] . '"></i></span></label>';
  }

  $output = '<div class = "form-group section">' . $output . '</div>';
  return $output;
}

/**
 *  Implements theme_textarea().
 */
function hasta_textarea($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id', 'name', 'cols', 'rows'));
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper', 'section'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    drupal_add_library('system', 'drupal.textarea');
    $wrapper_attributes['class'][] = 'resizable';
  }

  $element['#attributes']['class'][] = 'gui-textarea';

  foreach ($element['#attributes']['class'] as $i => $class) {
    if (strpos($class, 'fa-') !== FALSE) {
      $element['#nd_icon'] = 'fa ' . $class;
      unset($element['#attributes']['class'][$i]);
    }
  }
  $input = '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  if(isset($element['#nd_icon'])) {
    $input = '<label class = "field prepend-icon">' . $input .  '<span class = "field-icon"><i class="' . $element['#nd_icon'] . '"></i></span></label>';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>' . $input . '</div>';
  return $output;
}

/**
 *  Implements theme_select().
 */
function hasta_select($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id', 'name', 'size'));
  if($element['#title_display'] == 'none') {
    //$element['#options'][''] = $element['#title'];
  }
  //_form_set_class($element, array('form-select'));

  $output = '<select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . '</select>';
  $output = '<div class = "section select">' . $output . '<i class="arrow"></i></div>';
  return $output;
}


/**
 * Implements theme_field()
 *
 * Make field items a comma separated unordered list
 */
function stig_field__properties($variables) {
  $rows = array();
  $rows[] = array('data' => array(t('Parameter'), t('Value')), 'no_striping' => TRUE, 'class' => array('bold'));
  foreach ($variables['items'] as $items) {
    foreach (element_children($items) as $i) {
      $item = $items[$i];
      if (isset($item['#markup'])) {
        $rows[] = array('data' => array(t($item['#title']), t($item['#markup'])), 'no_striping' => TRUE);
      }
    }
  }
  return theme('table', array(
    'rows' => $rows,
    'attributes' => array('class' => array('table', 'table-bordered', 'table-striped')))
  );
}

/**
 * Implements theme_field()
 *
 * Make field items a comma separated unordered list
 */
function hasta_field($variables) {
  $output = '';
  $output .= $variables['element']['#label_display'] == 'above' ? ('<span class = "field-label-above">' . $variables['label'] . '</span><div class="clearfix"></div><br>') : '';
  $output .= $variables['element']['#label_display'] == 'inline' ? ('<strong class = "field-label-inline">' . $variables['label'] . '</strong> ') : '';
  $field_output = array();
  // Render the items as a comma separated inline list
  for ($i = 0; $i < count($variables['items']); $i++) {
    if(!isset($variables['items'][$i]['#printed']) || (isset($variables['items'][$i]['#printed']) && !$variables['items'][$i]['#printed'])) {
      $field_output[] = drupal_render($variables['items'][$i]);
    }
  }
  $output .= implode(', ', $field_output);
  // Render the top-level DIV.
  $output = '<div class="' . $variables ['classes'] . '"' . $variables ['attributes'] . '>' . $output . '</div>';
  return $output;
}

/**
 * Implements theme_field()
 */
function stig_field__field_sale_text($variables) {
  $output = '';
  if(count($variables['items'])) {
    for ($i = 0; $i < count($variables['items']); $i++) {
      $output .= '<div class="intro-label"><span class="label label-danger bg-red">' . $variables['items'][$i]['#markup']  . '</span></div>';
    }
  }
  return $output;
}

/**
 * Implements theme_field()
 */
function hasta_field__commerce_price($variables) {
  $output = '';
  if(count($variables['items'])) {
    for ($i = 0; $i < count($variables['items']); $i++) {
      $output .= '<h5 class="text-red-4">' . $variables['items'][$i]['#markup']  . '</h5>';
    }
  }
  return $output;
}

function stig_url_outbound_alter(&$path, &$options, $original_path) {
  $alias = drupal_get_path_alias($original_path);
  $url = parse_url($alias);
  if (isset($url['fragment'])) {
    //set path without the fragment
    $path = isset($url['path']) ? $url['path'] : '';

    //prevent URL from re-aliasing
    $options['alias'] = TRUE;

    //set fragment
    $options['fragment'] = $url['fragment'];
  }
}

function stig_link($variables) {
  if($variables['text'] == t('View cart')) {
    $variables['options']['attributes']['class'][] = 'btn btn-mod btn-small';
  }
  return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '>' . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}

function hasta_pager($variables) {
  $tags = $variables['tags'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $quantity = $variables['quantity'];
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.

  $li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('« first')), 'element' => $element, 'parameters' => $parameters));
  $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  $li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last »')), 'element' => $element, 'parameters' => $parameters));

  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => array('pager-first'),
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => array('pager-previous'),
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => array('pager-ellipsis'),
          'data' => '…',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => array('pager-item'),
            'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => array('pager-current'),
            'data' => '<a href = "#" class = "active">' . $i . '</a>',
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => array('pager-item'),
            'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => array('pager-ellipsis'),
          'data' => '…',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => array('pager-next'),
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => array('pager-last'),
        'data' => $li_last,
      );
    }
    $output = '<br><div class=" divider-line solid light margin opacity-7"></div>';
    $output .= theme('item_list', array(
      'items' => $items,
      'attributes' => array('class' => array('pager', 'blog-pagenation'))
    ));
    return $output;
  }
}

function hasta_pager_link($variables) {
  $text = $variables['text'];
  $page_new = $variables['page_new'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $attributes = $variables['attributes'];

  $page = isset($_GET['page']) ? $_GET['page'] : '';
  if ($new_page = implode(',', pager_load_array($page_new[$element], $element, explode(',', $page)))) {
    $parameters['page'] = $new_page;
  }

  $query = array();
  if (count($parameters)) {
    $query = drupal_get_query_parameters($parameters, array());
  }
  if ($query_pager = pager_get_query_parameters()) {
    $query = array_merge($query, $query_pager);
  }

  // Set each pager link title
  if (!isset($attributes['title'])) {
    static $titles = NULL;
    if (!isset($titles)) {
      $titles = array(
        t('«') => t('Go to first page'),
        t('‹') => t('Go to previous page'),
        t('›') => t('Go to next page'),
        t('»') => t('Go to last page'),
      );
    }
    if (isset($titles[$text])) {
      $attributes['title'] = $titles[$text];
    }
    elseif (is_numeric($text)) {
      $attributes['title'] = t('Go to page @number', array('@number' => $text));
    }
  }
  $replace_titles = array(
    t('« first') => '<i class="fa fa-angle-double-left"></i>',
    t('‹ previous') => '<i class="fa fa-angle-left"></i>',
    t('next ›') => '<i class="fa fa-angle-right"></i>',
    t('last »') => '<i class="fa fa-angle-double-right"></i>',
  );
  $text = isset($replace_titles[$text]) ? $replace_titles[$text] : check_plain($text);

  $attributes['href'] = url($_GET['q'], array('query' => $query));
  return '<a' . drupal_attributes($attributes) . '>' . $text . '</a>';
}

function hasta_preprocess_hybridauth_widget(&$vars, $hook) {
  $element = $vars['element'];

  $query = $element['#hybridauth_query'];
  $element['#hybridauth_destination'] = trim($element['#hybridauth_destination']);
  $element['#hybridauth_destination_error'] = trim($element['#hybridauth_destination_error']);
  $destination = drupal_get_destination();
  // Process destination; HTTP_REFERER is needed for widget in modals
  // to return to the current page.
  if ($element['#hybridauth_destination'] == '[HTTP_REFERER]' && isset($_SERVER['HTTP_REFERER'])) {
    $query += array(
      'destination' => $_SERVER['HTTP_REFERER'],
    );
  }
  elseif ($element['#hybridauth_destination']) {
    $query += array(
      'destination' => $element['#hybridauth_destination'],
    );
  }
  else {
    $query += array(
      'destination' => $destination['destination'],
    );
  }
  if ($element['#hybridauth_destination_error'] == '[HTTP_REFERER]' && isset($_SERVER['HTTP_REFERER'])) {
    $query += array(
      'destination_error' => $_SERVER['HTTP_REFERER'],
    );
  }
  elseif ($element['#hybridauth_destination_error']) {
    $query += array(
      'destination_error' => $element['#hybridauth_destination_error'],
    );
  }
  else {
    $query += array(
      'destination_error' => $destination['destination'],
    );
  }

  $providers = array();
  if ($element['#hybridauth_widget_type'] == 'list') {
    $class = array('hybridauth-widget-provider', 'button', 'btn-social', 'span-left');
    $rel = array('nofollow');

    foreach (hybridauth_get_enabled_providers() as $provider_id => $provider_name) {
      $window_type = variable_get('hybridauth_provider_' . $provider_id . '_window_type', 'current');
      $window_width = variable_get('hybridauth_provider_' . $provider_id . '_window_width', 800);
      $window_height = variable_get('hybridauth_provider_' . $provider_id . '_window_height', 500);
      $query_mod = $query;
      $class_mod = $class;
      $rel_mod = $rel;

      $replace_provider = array('google' => 'googleplus');
      $provider = strtolower($provider_name);
      $class_icon = isset($replace_provider[$provider]) ? $replace_provider[$provider] : $provider;

      $class_mod[] = $class_icon;
      switch ($window_type) {
        // Add Colorbox-specific things.
        case 'colorbox':
          $class_mod[] = 'colorbox-load';
          $query_mod += array(
            'width' => $window_width,
            'height' => $window_height,
            'iframe' => 'true',
          );
          break;
        // Add Shadowbox specific settings.
        case 'shadowbox':
          $rel_mod = array('shadowbox;width=' . $window_width . ';height=' . $window_height, 'nofollow');
          break;
        // Add fancyBox-specific settings.
        case 'fancybox':
          $class_mod[] = 'fancybox';
          $class_mod[] = 'fancybox.iframe';
          $class_mod[] = '{width:' . $window_width . ',height:' . $window_height . '}';
          break;
        // Add Lightbox2-specific settings.
        case 'lightbox2':
          $rel_mod = array('lightframe[|width:' . $window_width . 'px; height:' . $window_height . 'px;]', 'nofollow');
          break;
      }

      // Determine onclick behavior.
      $onclick = '';
      if ($element['#hybridauth_onclick'] === FALSE) {}
      elseif (!empty($element['#hybridauth_onclick'])) {
        $onclick = $element['#hybridauth_onclick'];
      }
      elseif ($window_type == 'current') {
        $class_mod[] = 'hybridauth-onclick-current';
      }
      elseif ($window_type == 'popup') {
        $class_mod[] = 'hybridauth-onclick-popup';
      }

      $text = theme('hybridauth_provider_icon', array(
        'icon_pack' => $element['#hybridauth_widget_icon_pack'],
        'provider_id' => $provider_id,
        'provider_name' => $provider_name,
      ));
      $path = 'hybridauth/window/' . $provider_id;
      $url = url($path, array('query' => $query_mod));
      if ($element['#hybridauth_widget_hide_links']) {
        $path = 'user';
      }
      $options = array(
        'html' => TRUE,
        'query' => $query_mod,
        'attributes' => array(
          'title' => $provider_name,
          'class' => $class_mod,
          'rel' => $rel_mod,
          'data-hybridauth-provider' => $provider_id,
          'data-hybridauth-url' => $url,
          // jQuery Mobile compatibility - so it doesn't use AJAX.
          'data-ajax' => 'false',
          // Add authentication window width and height.
          'data-hybridauth-width' => $window_width,
          'data-hybridauth-height' => $window_height,
        ) + ($onclick ? array('onclick' => $onclick) : array()),
      );
      $providers[] = l($text, $path, $options);
    }
  }
  else {
    $provider_id = 'none';
    $class = array();
    if ($element['#hybridauth_widget_use_overlay']) {
      $class = array('ctools-use-modal', 'ctools-modal-hybridauthmodal');
      ctools_include('modal');
      ctools_modal_add_js();
      $settings = array(
        'hybridauthmodal' => array(
          'modalSize' => array(
            'type' => 'scale',
            'width' => '400px',
            'height' => '200px',
            'addWidth' => 0,
            'addHeight' => 0,
            'contentRight' => 25,
            'contentBottom' => 45,
          ),
          'modalTheme' => 'HybridAuthModalDialog',
          // 'throbberTheme' => 'HybridAuthModalThrobber',
          'modalOptions' => array(
            'opacity' => 0.55,
            'background' => '#000',
          ),
          'animation' => 'fadeIn',
          'animationSpeed' => 'slow',
          'closeText' => t('Close'),
          'closeImage' => '',
          // 'loadingText' => t('Loading...'),
          /* 'throbber' => theme('image', array(
            'path' => ctools_image_path('throbber.gif'),
            'title' => t('Loading...'),
            'alt' => t('Loading'),
          )), */
        ),
      );
      drupal_add_js($settings, 'setting');
    }

    $class = 'button btn-social span-left ' . strtolower($element['#hybridauth_widget_link_title']);
    $providers[] = l(
      ($element['#hybridauth_widget_type'] == 'link') ?
        $element['#hybridauth_widget_link_text'] :
        theme('hybridauth_provider_icon', array('icon_pack' => $element['#hybridauth_widget_icon_pack'], 'provider_id' => $provider_id, 'provider_name' => $element['#hybridauth_widget_link_title'])),
      'hybridauth/providers/nojs/' . $element['#hybridauth_widget_icon_pack'],
      array(
        'html' => TRUE,
        'query' => $query,
        'attributes' => array(
          'title' => $element['#hybridauth_widget_link_title'],
          'class' => $class,
          'rel' => array('nofollow'),
        ),
      )
    );
  }

  _hybridauth_add_icon_pack_files($element['#hybridauth_widget_icon_pack']);

  $vars['providers'] = $providers;
}

/**
 * Template preprocess function for hybridauth_provider_icon.
 */
function hasta_preprocess_hybridauth_provider_icon(&$vars, $hook) {
  if (!isset($vars['provider_name'])) {
    $vars['provider_name'] = hybridauth_get_provider_name($vars['provider_id']);
  }
  $icon_pack_classes = array(
    'hybridauth-icon',
    drupal_html_class($vars['provider_id']),
    drupal_html_class('hybridauth-icon-' . $vars['icon_pack']),
    drupal_html_class('hybridauth-' . $vars['provider_id']),
    drupal_html_class('hybridauth-' . $vars['provider_id'] . '-' . $vars['icon_pack']),
  );

  // Icon pack modifications.
  _hybridauth_add_icon_pack_files($vars['icon_pack']);
  if ($function = ctools_plugin_load_function('hybridauth', 'icon_pack', $vars['icon_pack'], 'icon_classes_callback')) {
    $function($icon_pack_classes, $vars['provider_id']);
  }
  // Provider modifications.
  if ($provider = hybridauth_get_provider($vars['provider_id'])) {
    if (array_key_exists('css', $provider)) {
      drupal_add_css($provider['path'] . '/' . $provider['css']);
    }
    if ($function = ctools_plugin_get_function($provider, 'icon_classes_callback')) {
      $function($icon_pack_classes);
    }
  }

  $vars['icon_pack_classes'] = implode(' ', $icon_pack_classes);
}

/**
 * Implementation of hook_preprocess_html().
 */
function hasta_preprocess_flag(&$variables) {
  $variables['flag_classes_array'] = array_merge($variables['flag_classes_array'], array('btn', 'btn-orange-2', 'dark', 'btn-round'));
}