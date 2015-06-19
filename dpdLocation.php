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

class dpdLocation {
  
  /**
  * House number (eg: 350)
  * @var string 
  */
  public $street_numer;
  /**
  * Route (street) (eg: Leuvensesteenweg)
  * @var string 
  */
  public $route;
  /**
  * Locality (City/town/...) (eg: Boortmeerbeek)
  * @var string 
  */
  public $locality;
  /**
  * Postal code (eg: 3190)
  * @var string 
  */
  public $postal_code;
  /**
  * Administrative area level 1 (State/region/...) (eg: Vlaams Gewest)
  * @var string 
  */
  public $administrative_area_level_1;
  /**
  * Administrative area level 2 (County) (eg: Vlaams Brabant)
  * @var string 
  */
  public $administrative_area_level_2;
  /**
  * Country name (eg: Belgium)
  * @var string 
  */
  public $country;
  /**
  * Country iso alpha 2 representation (eg: BE)
  * @var string 
  */
  public $country_A2;
  /**
  * Country iso alpha 3 representation (eg: BEL)
  * @var string 
  */
  public $country_A3;
  /**
  * Country numerical representation (eg: 056)
  * @var string 
  */
  public $country_N;
  /**
  * Google place id (eg: ChIJ2eUgeAK6j4ARbn5u_wAGqWA)
  * @var string 
  */
  public $google_place_id;
  /**
  * Global Location Number (eg: 5400102000086)
  * @var string
  */
  public $GLN;
  /**
  * Longitude (eg: 50.966506)
  * @var float
  */
  public $lng;
  /**
  * Latitude (eg: 4.572303)
  * @var string
  */
  public $lat;
  
  function __construct($formatted_address = "") {

  }
  
}
