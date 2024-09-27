<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a message.
 *
 * @property Integer $message_id Unique message identifier inside this chat
 * @property Integer $message_thread_id Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
 * @property User $from Optional. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @property Chat $sender_chat Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @property Integer $sender_boost_count Optional. If the sender of the message boosted the chat, the number of boosts added by the user
 * @property User $sender_business_bot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
 * @property Integer $date Date the message was sent in Unix time. It is always a positive number, representing a valid date.
 * @property String $business_connection_id Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
 * @property Chat $chat Chat the message belongs to
 * @property MessageOriginUser|MessageOriginHiddenUser|MessageOriginChat|MessageOriginChannel $forward_origin Optional. Information about the original message for forwarded messages
 * @property True $is_topic_message Optional. True, if the message is sent to a forum topic
 * @property True $is_automatic_forward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @property Message $reply_to_message Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @property ExternalReplyInfo $external_reply Optional. Information about the message that is being replied to, which may come from another chat or forum topic
 * @property TextQuote $quote Optional. For replies that quote part of the original message, the quoted part of the message
 * @property Story $reply_to_story Optional. For replies to a story, the original story
 * @property User $via_bot Optional. Bot through which the message was sent
 * @property Integer $edit_date Optional. Date the message was last edited in Unix time
 * @property True $has_protected_content Optional. True, if the message can't be forwarded
 * @property True $is_from_offline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
 * @property String $media_group_id Optional. The unique identifier of a media message group this message belongs to
 * @property String $author_signature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @property String $text Optional. For text messages, the actual UTF-8 text of the message
 * @property MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @property LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
 * @property String $effect_id Optional. Unique identifier of the message effect added to the message
 * @property Animation $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
 * @property Audio $audio Optional. Message is an audio file, information about the file
 * @property Document $document Optional. Message is a general file, information about the file
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 * @property Story $story Optional. Message is a forwarded story
 * @property Video $video Optional. Message is a video, information about the video
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 * @property Voice $voice Optional. Message is a voice message, information about the file
 * @property String $caption Optional. Caption for the animation, audio, document, photo, video or voice
 * @property MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @property True $show_caption_above_media Optional. True, if the caption must be shown above the message media
 * @property True $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 * @property Dice $dice Optional. Message is a dice with random value
 * @property Game $game Optional. Message is a game, information about the game. More about games »
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 * @property Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
 * @property Location $location Optional. Message is a shared location, information about the location
 * @property User[] $new_chat_members Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @property User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @property String $new_chat_title Optional. A chat title was changed to this value
 * @property PhotoSize[] $new_chat_photo Optional. A chat photo was change to this value
 * @property True $delete_chat_photo Optional. Service message: the chat photo was deleted
 * @property True $group_chat_created Optional. Service message: the group has been created
 * @property True $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @property True $channel_chat_created Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @property MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
 * @property Integer $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property Integer $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property Message|InaccessibleMessage $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @property SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @property UsersShared $users_shared Optional. Service message: users were shared with the bot
 * @property ChatShared $chat_shared Optional. Service message: a chat was shared with the bot
 * @property String $connected_website Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @property WriteAccessAllowed $write_access_allowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
 * @property PassportData $passport_data Optional. Telegram Passport data
 * @property ProximityAlertTriggered $proximity_alert_triggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
 * @property ChatBoostAdded $boost_added Optional. Service message: user boosted the chat
 * @property ChatBackground $chat_background_set Optional. Service message: chat background set
 * @property ForumTopicCreated $forum_topic_created Optional. Service message: forum topic created
 * @property ForumTopicEdited $forum_topic_edited Optional. Service message: forum topic edited
 * @property ForumTopicClosed $forum_topic_closed Optional. Service message: forum topic closed
 * @property ForumTopicReopened $forum_topic_reopened Optional. Service message: forum topic reopened
 * @property GeneralForumTopicHidden $general_forum_topic_hidden Optional. Service message: the 'General' forum topic hidden
 * @property GeneralForumTopicUnhidden $general_forum_topic_unhidden Optional. Service message: the 'General' forum topic unhidden
 * @property GiveawayCreated $giveaway_created Optional. Service message: a scheduled giveaway was created
 * @property Giveaway $giveaway Optional. The message is a scheduled giveaway message
 * @property GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
 * @property GiveawayCompleted $giveaway_completed Optional. Service message: a giveaway without public winners was completed
 * @property VideoChatScheduled $video_chat_scheduled Optional. Service message: video chat scheduled
 * @property VideoChatStarted $video_chat_started Optional. Service message: video chat started
 * @property VideoChatEnded $video_chat_ended Optional. Service message: video chat ended
 * @property VideoChatParticipantsInvited $video_chat_participants_invited Optional. Service message: new participants invited to a video chat
 * @property WebAppData $web_app_data Optional. Service message: data sent by a Web App
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 */
class Message {

}
