<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * The message was originally sent to a channel chat.
 *
 * @property String $type Type of the message origin, always “channel”
 * @property Integer $date Date the message was sent originally in Unix time
 * @property Chat $chat Channel chat to which the message was originally sent
 * @property Integer $message_id Unique message identifier inside the chat
 * @property String $author_signature Optional. Signature of the original post author
 */
class MessageOriginChannel {

}
