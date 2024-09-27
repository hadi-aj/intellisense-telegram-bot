<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @property String $status The member's status in the chat, always “kicked”
 * @property User $user Information about the user
 * @property Integer $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
 */
class ChatMemberBanned {

}
