<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a chat.
 *
 * @property Integer $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property String $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property String $title Optional. Title, for supergroups, channels and group chats
 * @property String $username Optional. Username, for private chats, supergroups and channels if available
 * @property String $first_name Optional. First name of the other party in a private chat
 * @property String $last_name Optional. Last name of the other party in a private chat
 * @property True $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
 */
class Chat {

}
