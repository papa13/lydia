<?php
/**
* Helpers for the template file.
*/
/**
 * Add static entries in the template file. 
 */
$ly->data['header'] = '<h1>Lydia</h1>';
$ly->data['footer'] = '<p>Footer: &copy; Lydia by Mikael Roos (mos@dbwebb.se)</p>';

/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ly = CLydia::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ly->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ly->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ly->request, true)) . "</pre>";
  return $html;
}
