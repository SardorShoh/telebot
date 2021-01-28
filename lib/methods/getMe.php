<?php

namespace lib\methods;

class getMe {
  public int $id;
  public bool $is_bot;
  public string $first_name;
  public string $username;
  public bool $can_join_groups;
  public bool $can_read_all_group_messages;
  public bool $supports_inline_queries;
}
