<?php

namespace lib\telebot\types;

use lib\telebot\types\{ChatPhoto, Message, ChatPermissions, ChatLocation};

class Chat {
  public int $id;
  public string $type; //“private”, “group”, “supergroup” or “channel”
  public string $title; //optional
  public string $username; //optional
  public string $first_name; //optional
  public string $last_name; //optional
  public ChatPhoto $photo; //optional
  public string $bio; //optional
  public string $description; //optional
  public string $invite_link; //optional
  public Message $pinned_message; //optional
  public ChatPermissions $permissions; //optional
  public int $slow_mode_delay; //optional
  public string $sticker_set_name; //optional
  public bool $can_set_sticker_set; //optional
  public int $linked_chat_id; //optional
  public ChatLocation $location; //optional
}