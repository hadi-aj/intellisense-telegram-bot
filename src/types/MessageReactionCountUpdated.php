<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * @property Chat $chat The chat containing the message
 * @property Integer $message_id Unique message identifier inside the chat
 * @property Integer $date Date of the change in Unix time
 * @property ReactionCount[] $reactions List of reactions that are present on the message
 */
class MessageReactionCountUpdated {

}
