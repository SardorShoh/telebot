<?php

namespace lib\telebot\types;

class ChatPermissions {
  public bool $can_send_messages; //Optional
  public bool $can_send_media_messages; //Optional
  public bool $can_send_polls; //Optional
  public bool $can_send_other_messages; //Optional
  public bool $can_add_web_page_previews; //Optional
  public bool $can_change_info; //Optional
  public bool $can_invite_users; //Optional
  public bool $can_pin_messages; //Optional
}
