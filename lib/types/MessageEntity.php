<?php

namespace lib\telebot\types;

use lib\telebot\types\User;

class MessageEntity {
  /*
  * Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), 
  * “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), 
  * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), 
  * “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), 
  * “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
  */
  public string $type;
  public int $offset;
  public int $length;
  public string $url; //Optional
  public User $user; //Optional
  public string $language; //Optional
}
