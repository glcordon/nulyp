<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function hasta_form_system_theme_settings_alter(&$form, &$form_state) {
  drupal_add_css(drupal_get_path('theme', 'hasta') . '/css/theme-settings.css');
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'main',
    '#weight' => '-10',
    '#title' => t('Hasta Theme settings'),
  );

  if(module_exists('nikadevs_cms')) {
    $form['options']['nd_layout_builder'] = nikadevs_cms_layout_builder();
  }
  else {
    drupal_set_message('Enable NikaDevs CMS module to use layout builder.');
  }

  $form['options']['main'] = array(
    '#type' => 'fieldset',
    '#title' => t('Main settings'),
  );
  $skins = array('default', 'bridge', 'cyan', 'green', 'lightblue', 'mossgreen', 'orange', 'pink', 'purple', 'red', 'violet', 'yellow');
  $form['options']['main']['skin'] = array(
    '#type' => 'radios',
    '#title' => t('Skin'),
    '#options' => array_combine($skins, $skins),
    '#default_value' => theme_get_setting('skin'),
    '#attributes' => array('class' => array('color-radios')),
  );
  $layout_widths = array('wrapper-wide' => t('Wide'), 'wrapper-boxed' => t('Boxed'));
  $form['options']['main']['layout_width'] = array(
    '#type' => 'select',
    '#title' => t('Layout Width'),
    '#options' => $layout_widths,
    '#default_value' => theme_get_setting('layout_width'),
    '#attributes' => array('class' => array('form-control')),
  );
  $skins = array('-', 'bg1', 'bg2', 'bg3', 'bg4', 'bg5', 'bg6', 'bg7', 'bg8', 'bg9', 'bg10', 'bg11', 'bg12');
  $form['options']['main']['bg_image'] = array(
    '#type' => 'radios',
    '#title' => t('Skin'),
    '#options' => array_combine($skins, $skins),
    '#default_value' => theme_get_setting('bg_image'),
    '#attributes' => array('class' => array('color-radios')),
  );
  $form['options']['main']['retina'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Retina Script'),
    '#default_value' => theme_get_setting('retina'),
    '#description'   => t("Only for retina displays and for manually added images. The script will check if the same image with suffix @2x exists and will show it."),
  );
  $form['options']['main']['page_404'] = array(
    '#type' => 'select',
    '#title' => t('Page 404'),
    '#default_value' => theme_get_setting('page_404'),
    '#options' => array(
      'page-404-2' => t('Search form on the left and 404 Text on the Right'),
      'page-404' => t('Centered Text'),
    ),
    '#description'   => t("Type of the 'Page not Found'"),
    '#attributes' => array('class' => array('form-control')),
  );

  $form['options']['maintenance'] = array(
    '#type' => 'fieldset',
    '#title' => t('Maintenance'),
  );
  $coming_soon_content = theme_get_setting('coming_soon_content');
  $form['options']['maintenance']['coming_soon_content'] = array(
    '#type' => 'text_format',
    '#title' => t('Coming Soon Content'),
    '#format' => isset($coming_soon_content['format']) ? $coming_soon_content['format'] : NULL,
    '#default_value' => isset($coming_soon_content['value']) ? $coming_soon_content['value'] : '',
  );

  $form['options']['css'] = array(
    '#type' => 'fieldset',
    '#title' => t('Customizations'),
  );
  $form['options']['css']['custom_css'] = array(
    '#type' => 'textarea',
    '#title' => t('Custom CSS'),
    '#default_value' => theme_get_setting('custom_css'),
    '#attributes' => array('class' => array('form-control')),
  );

  $form['#submit'][] = 'progressive_settings_submit';
}

/**
 * Save settings data.
 */
function progressive_settings_submit($form, &$form_state) {
  $page_404 = $form_state['input']['page_404'];
  variable_set('site_404', $page_404);
}