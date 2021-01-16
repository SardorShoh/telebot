<?php

namespace lib\telebot\types;

class Dice {
  public string $emoji;
  /*
  *Value of the dice, 1-6 for “🎲” and “🎯” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
  */
  public int $value; 
}