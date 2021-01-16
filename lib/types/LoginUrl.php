<?php

namespace lib\telebot\types;

class LoginUrl {
  public string $url;
  public string $forward_text; //Optional
  public string $bot_username; //Optional
  public bool $request_write_access; //Optional
}
