<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * The message was originally sent by a known user.
 *
 * @property String $type Type of the message origin, always “user”
 * @property Integer $date Date the message was sent originally in Unix time
 * @property User $sender_user User that sent the message originally
 */
class MessageOriginUser {

}
