<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 */

function ver_theme_form_islandora_solr_simple_search_form_alter(&$form, &$form_state, $form_id) {
  $link = array(
    '#markup' => l(t("Advanced Search"), "advanced-search", array('attributes' => array('class' => array('adv_search')))),
  );
  $form['simple']['advanced_link'] = $link;
}

/**
 * Implements hook_block_view_MODULE_DELTA_alter().
 */
function ver_theme_view_islandora_solr_simple_alter(&$data, $block) {
  drupal_add_js(drupal_get_path('theme', 'ver_theme') . '/js/clean_simple_search.js');
}

