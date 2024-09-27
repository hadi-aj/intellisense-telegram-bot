<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * @property String $type Type of the message origin, always “chat”
 * @property Integer $date Date the message was sent originally in Unix time
 * @property Chat $sender_chat Chat that sent the message originally
 * @property String $author_signature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
 */
class MessageOriginChat {

}
