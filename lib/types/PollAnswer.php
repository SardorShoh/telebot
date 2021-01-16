<?php

namespace lib\telebot\types;

use lib\telebot\types\User;

class PollAnswer {
  public string $poll_id;
  public User $user;
  public array $option_ids;
}
