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
