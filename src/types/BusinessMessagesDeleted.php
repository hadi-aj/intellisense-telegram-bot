<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object is received when messages are deleted from a connected business account.
 *
 * @property String $business_connection_id Unique identifier of the business connection
 * @property Chat $chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
 * @property Integer[] $message_ids The list of identifiers of deleted messages in the chat of the business account
 */
class BusinessMessagesDeleted {

}
