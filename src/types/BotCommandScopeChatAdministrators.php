<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 *
 * @property String $type Scope type, must be chat_administrators
 * @property Integer or String $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 */
class BotCommandScopeChatAdministrators {

}
