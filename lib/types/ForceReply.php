<?php

namespace lib\telebot\types;

class ForceReply {
  public string $force_reply = 'True';
  public bool $selective; // Optional
}
