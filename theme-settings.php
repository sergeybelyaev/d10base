<?php

use Drupal\Core\Form\FormStateInterface;

function d10base_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['d10base_settings'] = [
    '#type'          => 'details',
    '#title'         => t('Custom theme settings'),
    '#open'          => TRUE,
  ];
  $form['d10base_settings']['copyright'] = [
    '#type'          => 'textfield',
    '#title'         => t('Copyright'),
    '#default_value' => theme_get_setting('copyright'),
    '#description'   => t('Place copyright here.'),
  ];
}
