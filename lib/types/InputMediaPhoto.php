<?php

namespace lib\telebot\types;

class InputMediaPhoto {
  public string $type;
  public string $media;
  public string $caption; //Optional
  public string $parse_mode; //Optional
  public array $caption_entities; //Array of MessageEntity Optional
}