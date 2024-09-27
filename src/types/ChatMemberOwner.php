<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @property String $status The member's status in the chat, always “creator”
 * @property User $user Information about the user
 * @property Boolean $is_anonymous True, if the user's presence in the chat is hidden
 * @property String $custom_title Optional. Custom title for this user
 */
class ChatMemberOwner {

}
