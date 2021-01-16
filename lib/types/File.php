<?php

namespace lib\telebot\types;

class File {
  public string $file_id;
  public string $file_unique_id;
  public int $file_size; //Optional
  public string $file_path; //Optional
}
