<?php

namespace Drupal\my_twig_filter\TwigExtension;
 
class Truncate extends \Twig_Extension {    
 
  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('truncate', array($this, 'truncate')),
    ];
  }
 
  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'my_twig_filter.truncate';
  }
 
  /**
   * trim string to 200 chars.
   */
  public static function truncate($string) {
    return substr($string, 0, 200);
  }
 
}