<?php

namespace lib\telebot\types;

use lib\telebot\types\{ User, Message };

class CallbackQuery {
  public string $id;
  public User $from;
  public Message $message; //Optional
  public string $inline_message_id; //Optional
  public string $chat_instance; //Optional
  public string $data; //Optional
  public string $game_short_name; //Optional
}
