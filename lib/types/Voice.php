<?php

namespace lib\telebot\types;

class Voice {
  public string $file_id;
  public string $file_unique_id;
  public int $duration;
  public string $mime_type; //Optional
  public int $file_size; //Optional
}