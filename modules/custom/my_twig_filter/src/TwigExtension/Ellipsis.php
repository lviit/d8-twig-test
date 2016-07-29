<?php

namespace Drupal\my_twig_filter\TwigExtension;
 
class Ellipsis extends \Twig_Extension {    
 
  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('ellipsis', array($this, 'ellipsis')),
    ];
  }
 
  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'my_twig_filter.ellipsis';
  }
 
  /**
   * Adds trailing dotdotdot to string.
   */
  public static function ellipsis($string) {
    return $string . '...';
  }
 
}