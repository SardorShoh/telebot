<?php

namespace lib\telebot\types;

class User {
  public int $id;
  public bool $is_bot;
  public string $first_name;
  public string $last_name; //optional
  public string $username; //optional
  public string $language_code; //optional
  public bool $can_join_groups; //optional
  public bool $can_read_all_group_messages; //optional
  public bool $supports_inline_queries; //optional
}