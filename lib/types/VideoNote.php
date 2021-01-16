<?php

namespace lib\telebot\types;

use lib\telebot\types\PhotoSize;

class VideoNote {
  public string $file_id;
  public string $file_unique_id;
  public int $length;
  public int $duration;
  public PhotoSize $thumb; //Optional
  public int $file_size; //Optional
}