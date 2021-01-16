<?php

namespace lib\telebot\types;

class ReplyKeyboardMarkup {
  public array $keyboard; //Array of Array of KeyboardButton
  public bool $resize_keyboard; //Optional
  public bool $one_time_keyboard; //Optional
  public bool $selective; //Optional
}
