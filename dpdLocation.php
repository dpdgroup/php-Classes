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
  * Full formated address (eg: Leuvensesteenweg 350, 3190 Boortmeerbeek, Belgium)
  * @var string 
  */
  public string $formated_address;
  /**
  * House number (eg: 350)
  * @var string 
  */
  public string $street_numer;
  /**
  * Route (street) (eg: Leuvensesteenweg)
  * @var string 
  */
  public string $route;
  /**
  * Locality (City/town/...) (eg: Boortmeerbeek)
  * @var string 
  */
  public string $locality;
  /**
  * Postal code (eg: 3190)
  * @var string 
  */
  public string $postal_code;
  /**
  * Administrative area level 1 (State/region/...) (eg: Vlaams Gewest)
  * @var string 
  */
  public string $administrative_area_level_1;
  /**
  * Administrative area level 2 (County) (eg: Vlaams Brabant)
  * @var string 
  */
  public string $administrative_area_level_2;
  /**
  * Country name (eg: Belgium)
  * @var string 
  */
  public string $country;
  /**
  * Country iso alpha 2 representation (eg: BE)
  * @var string 
  */
  public string $country_A2;
  /**
  * Country iso alpha 3 representation (eg: BEL)
  * @var string 
  */
  public string $country_A3;
  /**
  * Country numerical representation (eg: 056)
  * @var string 
  */
  public string $country_N;
  /**
  * Google place id (eg: ChIJ2eUgeAK6j4ARbn5u_wAGqWA)
  * @var string 
  */
  public string $google_place_id;
  /**
  * Global Location Number (eg: 5400102000086)
  * @var string
  */
  public string $GLN;
  /**
  * Longitude (eg: 50.966506)
  * @var float
  */
  public float $lng;
  /**
  * Latitude (eg: 4.572303)
  * @var string
  */
  public float $lat;
  
  function __construct($address = "") {
    if(is_string($address)){
      $this->formated_address = $formated_address;
    } elseif (is_array($address)){
      
    } else {
      throw new dpdException("dpdLocation can only take a string or an array as input.");
    }
  }
  
  /**
  * Try to fill in the missing data with whatever data is known.
  * 
  * @todo What with multiple results if query wasn't specific enough?
  * @return boolean
  */
  public function parseData() {
    if($formated_address = $this->getFormatedAddress()
      && $formated_address != "") {
      $query = urlencode($formated_address);
    }

    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $query;
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1
      ,CURLOPT_CONNECTTIMEOUT => 2
      ,CURLOPT_TIMEOUT => 2
      ,CURLOPT_URL => $url
    ));
    $result = curl_exec($curl);
    curl_close($curl);
    //...
  }
  
  public function getFormatedAddress() {
    //...
  }
  
}
