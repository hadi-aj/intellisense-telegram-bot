<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 *
 * @property Chat $chat Chat the message belonged to
 * @property Integer $message_id Unique message identifier inside the chat
 * @property Integer $date Always 0. The field can be used to differentiate regular and inaccessible messages.
 */
class InaccessibleMessage {

}
