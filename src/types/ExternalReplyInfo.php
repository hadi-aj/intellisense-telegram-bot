<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 *
 * @property MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel $origin Origin of the message replied to by the given message
 * @property Chat $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
 * @property Integer $message_id Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
 * @property LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the original message, if it is a text message
 * @property Animation $animation Optional. Message is an animation, information about the animation
 * @property Audio $audio Optional. Message is an audio file, information about the file
 * @property Document $document Optional. Message is a general file, information about the file
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 * @property Story $story Optional. Message is a forwarded story
 * @property Video $video Optional. Message is a video, information about the video
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 * @property Voice $voice Optional. Message is a voice message, information about the file
 * @property True $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 * @property Dice $dice Optional. Message is a dice with random value
 * @property Game $game Optional. Message is a game, information about the game. More about games »
 * @property Giveaway $giveaway Optional. Message is a scheduled giveaway, information about the giveaway
 * @property GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @property Location $location Optional. Message is a shared location, information about the location
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 * @property Venue $venue Optional. Message is a venue, information about the venue
 */
class ExternalReplyInfo {

}
