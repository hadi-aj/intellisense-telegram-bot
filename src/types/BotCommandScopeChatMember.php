<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @property String $type Scope type, must be chat_member
 * @property Integer or String $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property Integer $user_id Unique identifier of the target user
 */
class BotCommandScopeChatMember {

}
