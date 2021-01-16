<?php 

namespace lib\telebot\types;

class Contact {
  public string $phone_number;
  public string $first_name;
  public string $last_name; //Optional
  public int $user_id; //Optional
  public string $vcard; //Optional
}
