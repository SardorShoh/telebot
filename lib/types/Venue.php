<?php

namespace lib\telebot\types;

use lib\telebot\types\Location;

class Venue {
  public Location $location;
  public string $title;
  public string $address;
  public string $foursquare_id; //Optional
  /*
  * Optional. Foursquare type of the venue. 
  * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
  */
  public string $foursquare_type; //Optional
  public string $google_place_id; //Optional
  public string $google_place_type; //Optional
}
