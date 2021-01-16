<?php

namespace lib\telebot\types;

class ReplyKeyboardRemove {
  public string $remove_keyboard = 'True';
  public bool $selective; //optional
}
