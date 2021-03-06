<?php

namespace lib\telebot\types;

use lib\telebot\types\PhotoSize;

class Video {
  public string $file_id;
  public string $file_unique_id;
  public int $width;
  public int $height;
  public int $duration;
  public PhotoSize $thumb; //Optional
  public string $file_name; //Optional
  public string $mime_type; //Optional
  public int $file_size; //Optional
}
