<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a boost removed from a chat.
 *
 * @property Chat $chat Chat which was boosted
 * @property String $boost_id Unique identifier of the boost
 * @property Integer $remove_date Point in time (Unix timestamp) when the boost was removed
 * @property ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source Source of the removed boost
 */
class ChatBoostRemoved {

}
