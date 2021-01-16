<?php

namespace lib\telebot\types;

use lib\telebot\types\PhotoSize;

class Audio {
  public string $file_id;
  public string $file_unique_id;
  public int $duration;
  public string $performer; //Optional
  public string $title; //Optional
  public string $file_name; //Optional
  public string $mime_type; //Optional
  public int $file_size; //Optional
  public PhotoSize $thumb; //Optional
}
