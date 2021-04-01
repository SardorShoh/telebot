<?php

class Telebot {

  protected string $bot = 'https://api.telegram.org/bot';
  protected static $_instance;
  private $url;
  protected CurlHandle|false $curl;
  
  final public static function instance() {
    if(self::$_instance == null) {
    	self::$_instance = new self();
    }
		return self::$_instance;
  }

  final public function connect() {
  	
  }

}