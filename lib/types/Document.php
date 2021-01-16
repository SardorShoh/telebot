<?php

namespace lib\telebot\types;

use lib\telebot\types\PhotoSize;

class Document {
  public string $file_id;
  public string $file_unique_id;
  public PhotoSize $thumb; //Optional
  public string $file_name; //Optional
  public string $mime_type; //Optional
  public string $file_size; //Optional
}
