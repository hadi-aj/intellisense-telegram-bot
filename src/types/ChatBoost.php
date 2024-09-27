<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object contains information about a chat boost.
 *
 * @property String $boost_id Unique identifier of the boost
 * @property Integer $add_date Point in time (Unix timestamp) when the chat was boosted
 * @property Integer $expiration_date Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
 * @property ChatBoostSourcePremium|ChatBoostSourceGiftCode|ChatBoostSourceGiveaway $source Source of the added boost
 */
class ChatBoost {

}
