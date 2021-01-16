<?php

namespace lib\telebot\types;

use lib\telebot\types\KeyboardButtonPollType;

class KeyboardButton {
  public string $text;
  public bool $request_contact; //Optional
  public bool $request_location; //Optional
  public KeyboardButtonPollType $request_poll; //Optional
}
