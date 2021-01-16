<?php

namespace lib\telebot\types;

use lib\telebot\types\User;

class ProximityAlertTriggered {
  public User $traveler;
  public User $watcher;
  public int $distance;
}
