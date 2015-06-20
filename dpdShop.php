<?php
/**
 *  
 *
 * 
 * @author     Michiel Van Gucht
 * @version    0.0.1
 * @copyright  2015 Michiel Van Gucht
 * @license    LGPL
 */

require_once("dpdException.php");
require_once("dpdLocation.php");

class dpdShop {
  
  /**
   * Possible services
   * By adding up the values (eg $this->services = $this::pickup + $this::return)
   * we can use binary operator & to filter the list locally very easily
   */
  const $pickup   = 0x01;
  const $return   = 0x02;
  const $cod      = 0x04;
  const $ident    = 0x08;
  const $swap     = 0x10;
  const $offline  = 0x20;
  const $online   = 0x40;
  
  public $id;
  public $name;
  public $location;
  public $business_hours;
  public $logo_active_url;
  public $logo_inactive_url;
  public $logo_shadow_url;
  public $image_url;
  
  private $services;
  
  public function __construct($data){
    if (is_array($data)){ 
      foreach($data as $key => $value){ 
        if(property_exists($this, $key)){ 
          $this->$key = $value; 
        } 
      } 
    } else {
      throw new dpdException("Can only take an array as input."); 
    }
  }
  
  /**
   * Add a single service to the shop.
   * @param int $service The constants defined above.
   * @return int
   */
  public function addService($service) {
    // Only add it when it isn't already set.
    if(!$this->hasService($service)) {
      $this->services =+ $service;
    }
    return $this->services;
  }
  /** 
   * Add multiple services to the shop
   * @param int[] $services An array of the constants defined above.
   * @return int
   */
  public function addServices(array $services) {
    foreach($services as $service) {
      $this->addService($service);
    }
    return $this->services;
  }
  
  /**
   * Remove a single service from the shop.
   * @param int $service The constants defined above.
   * @return int
   */
  public function delService($service) {
    if($this->hasService($service)) {
      $this->services =- $service;
    }
    return $this->services;
  }
  /** 
   * Remove multiple services from the shop
   * @param int[] $services An array of the constants defined above.
   * @return int
   */
  public function delServices($services) {
    foreach($services as $service) {
      $this->delService($service);
    }
    return $this->services;
  }
  
  /** 
   * See if the shop provides a certain service
   * @param int $services One of the constants defined above.
   * @return boolean
   */
  public function hasService($service) {
    return ($this->services & $service) ? true : false;
  }

}
