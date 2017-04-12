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
