<?php

namespace lib\telebot\types;

class Location {
  public float $longitude;
  public float $latitude;
  public float $horizontal_accuracy; //Optional
  public int $live_period; //Optional
  public int $heading; //Optional
  public int $proximity_alert_radius; //Optional
}
