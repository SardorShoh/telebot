<?php

namespace lib\telebot\types;

class Poll {
  public string $id;
  public string $question;
  public array $options; //Array of PollOption
  public int $total_voter_count;
  public bool $is_closed;
  public bool $is_anonymous;
  public string $type; //currently can be “regular” or “quiz”
  public bool $allows_multiple_answers;
  public int $correct_option_id; //Optional
  public string $explanation; //Optional
  public array $explanation_entities; //Array of MessageEntity Optional
  public int $open_period; //Optional
  public int $close_date; //Optional
}
