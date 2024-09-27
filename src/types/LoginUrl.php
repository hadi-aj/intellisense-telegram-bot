<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Telegram apps support these buttons as of version 5.7.
 *
 * @property String $url An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization.
 * @property String $forward_text Optional. New text of the button in forwarded messages.
 * @property String $bot_username Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
 * @property Boolean $request_write_access Optional. Pass True to request the permission for your bot to send messages to the user.
 */
class LoginUrl {

}
