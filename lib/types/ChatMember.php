<?php

namespace lib\telebot\types;

use lib\telebot\types\User;

class ChatMember {
  public User $user;
  /*
  * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
  */
  public string $status;
  public string $custom_title; //Optional
  public bool $is_anonymous; //Optional
  public bool $can_be_edited; //Optional
  public bool $can_post_messages; //Optional
  public bool $can_edit_messages; //Optional
  public bool $can_delete_messages; //Optional
  public bool $can_restrict_members; //Optional
  public bool $can_promote_members; //Optional
  public bool $can_change_info; //Optional
  public bool $can_invite_users; //Optional
  public bool $can_pin_messages; //Optional
  public bool $is_member; //Optional
  public bool $can_send_messages; //Optional
  public bool $can_send_media_messages; //Optional
  public bool $can_send_polls; //Optional
  public bool $can_send_other_messages; //Optional
  public bool $can_add_web_page_previews; //Optional
  public int $until_datel; //Optional
}
