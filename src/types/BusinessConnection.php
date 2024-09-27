<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Describes the connection of the bot with a business account.
 *
 * @property String $id Unique identifier of the business connection
 * @property User $user Business account user that created the business connection
 * @property Integer $user_chat_id Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property Integer $date Date the connection was established in Unix time
 * @property Boolean $can_reply True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours
 * @property Boolean $is_enabled True, if the connection is active
 */
class BusinessConnection {

}
