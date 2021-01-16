<?php

namespace lib\telebot\types;

class UserProfilePhotos {
  public int $total_count;
  public array $photos; //Array of Array of PhotoSize
}
