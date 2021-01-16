<?php

namespace lib\telebot\types;

use lib\telebot\types\InputFile;

class InputMediaVideo {
  public string $type;
  public string $media;
  public string|InputFile $thumb; //Optional
  public string $caption; //Optional
  public string $parse_mode; //Optional
  public array $caption_entities; //Array of MessageEntity Optional
  public int $width; //Optional
  public int $height; //Optional
  public int $duration; //Optional
  public bool $supports_streaming; //Optional
}