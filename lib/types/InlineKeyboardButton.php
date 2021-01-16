<?php

namespace lib\telebot\types;

use lib\telebot\types\{ LoginUrl, CallbackGame };

class InlineKeyboardButton {
  public string $text;
  public string $url; //Optional
  public LoginUrl $login_url; //Optional
  public string $callback_data; //Optional
  public string $switch_inline_query; //Optional
  public string $switch_inline_query_current_chat; //Optional
  public CallbackGame $callback_game; //Optional
  public bool $pay; //Optional
}
