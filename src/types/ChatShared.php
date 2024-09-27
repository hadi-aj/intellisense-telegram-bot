<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @property Integer $request_id Identifier of the request
 * @property Integer $chat_id Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
 * @property String $title Optional. Title of the chat, if the title was requested by the bot.
 * @property String $username Optional. Username of the chat, if the username was requested by the bot and available.
 * @property PhotoSize[] $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
 */
class ChatShared {

}
