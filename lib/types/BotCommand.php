<?php

namespace lib\telebot\types;

class BotCommand {
  public string $command; //Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
  public string $description; //Description of the command, 3-256 characters.
}