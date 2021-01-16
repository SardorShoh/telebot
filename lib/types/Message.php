<?php 

namespace lib\telebot\types;

use lib\telebot\types\{
  User, 
  Chat, 
  Animation, 
  Audio, 
  Document, 
  Sticker, 
  Video, 
  VideoNote, 
  Contact, 
  Dice, 
  Game, 
  Poll, 
  Venue, 
  Location, 
  Invoice, 
  SuccessfulPayment, 
  PassportData, 
  ProximityAlertTriggered, 
  InlineKeyboardMarkup
};

class Message {
  public int $message_id;
  public User $from; //optional
  public Chat $sender_chat; //optional
  public int $date;
  public Chat $chat;
  public User $forward_from; //optional
  public Chat $forward_from_chat; //optional
  public int $forward_from_message_id; //optional
  public string $forward_signature; //optional
  public string $forward_sender_name; //optional
  public int $forward_date; //optional
  public Message $reply_to_message; //optional
  public User $via_bot; //optional
  public int $edit_date; //optional
  public string $media_group_id; //optional
  public string $author_signature; //optional
  public string $text; //optional
  public array $entities; //MessageEntity array optional
  public Animation $animation; //optional
  public Audio $audio; //optional
  public Document $document; //optional
  public array $photo; //PhotoSize array optional
  public Sticker $sticker; //optional
  public Video $video; //optional
  public VideoNote $video_note; //optional
  public Voice $voice; //optional
  public string $caption; //optional
  public array $caption_entities; //MessageEntity array optional
  public Contact $contact; //optional
  public Dice $dice; //optional
  public Game $game; //optional
  public Poll $poll; //optional
  public Venue $venue; //optional
  public Location $location; //optional
  public array $new_chat_members; //User array optional
  public User $left_chat_member; //optional
  public string $new_chat_title; //optional
  public array $new_chat_photo; //PhotoSize array optional
  public bool $delete_chat_photo = true;  //optional
  public bool $group_chat_created = true; //optional
  public bool $supergroup_chat_created = true; //optional
  public bool $channel_chat_created = true; //optional
  public int $migrate_to_chat_id; //optional
  public int $migrate_from_chat_id; //optional
  public Message $pinned_message; //optional
  public Invoice $invoice; //optional
  public SuccessfulPayment $successful_payment; //optional
  public string $connected_website; //optional
  public PassportData $passport_data; //optional
  public ProximityAlertTriggered $proximity_alert_triggered; //optional
  public InlineKeyboardMarkup $reply_markup; //optional
}