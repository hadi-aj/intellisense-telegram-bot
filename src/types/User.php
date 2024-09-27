<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a Telegram user or bot.
 *
 * @property Integer $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property Boolean $is_bot True, if this user is a bot
 * @property String $first_name User's or bot's first name
 * @property String $last_name Optional. User's or bot's last name
 * @property String $username Optional. User's or bot's username
 * @property String $language_code Optional. IETF language tag of the user's language
 * @property True $is_premium Optional. True, if this user is a Telegram Premium user
 * @property True $added_to_attachment_menu Optional. True, if this user added the bot to the attachment menu
 * @property Boolean $can_join_groups Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @property Boolean $can_read_all_group_messages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
 * @property Boolean $supports_inline_queries Optional. True, if the bot supports inline queries. Returned only in getMe.
 * @property Boolean $can_connect_to_business Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
 */
class User {

}
