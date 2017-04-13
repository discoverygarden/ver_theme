<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 */

function ver_theme_form_islandora_solr_simple_search_form_alter(&$form, &$form_state, $form_id) {
  $link = array(
    '#markup' => l(t("Advanced Search"), "advanced-search", array('attributes' => array('class' => array('adv_search')))),
  );
  $form['simple']['islandora_simple_search_query']['#title_display'] = 'invisible';
  $form['simple']['islandora_simple_search_query']['#attributes']['placeholder'] = t("Search this repository");
  $form['simple']['advanced_link'] = $link;
}

/**
 * Implements hook_form_alter().
 */
function ver_theme_form_islandora_solr_advanced_search_form_alter(&$form, &$form_state, $form_id) {
  foreach ($form['terms'] as $key => &$value) {
    if (is_array($value)) {
      $value['field']['#title_display'] = 'invisible';
      $value['search']['#title_display'] = 'invisible';
    }
  }
}

function ver_theme_preprocess_islandora_paged_tei_seadragon_viewer(&$variables) {
  dsm($variables, "vars");
}

/**
 * Theme function to create a clipper link.
 */
function ver_theme_islandora_openseadragon_clipper(&$variables) {
  $image = theme(
    'image',
    array(
      'path' => path_to_theme() . '/images/cut-content-button.png',
    )
  );
  return l(
    $image,
    "islandora/object/{$variables['pid']}/print",
    array(
      'attributes' => array(
        'title' => t('Clip Image'),
        'id' => 'clip',
      ),
      'html' => TRUE,
    )
  );
}
