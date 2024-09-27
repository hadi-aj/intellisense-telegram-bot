<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 *
 * @property Integer $winner_count Number of winners in the giveaway
 * @property Integer $unclaimed_prize_count Optional. Number of undistributed prizes
 * @property Message $giveaway_message Optional. Message with the giveaway that was completed, if it wasn't deleted
 */
class GiveawayCompleted {

}
