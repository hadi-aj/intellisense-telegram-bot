<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 *
 * @property Chat $chat The chat that created the giveaway
 * @property Integer $giveaway_message_id Identifier of the message with the giveaway in the chat
 * @property Integer $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway were selected
 * @property Integer $winner_count Total number of winners in the giveaway
 * @property User[] $winners List of up to 100 winners of the giveaway
 * @property Integer $additional_chat_count Optional. The number of other chats the user had to join in order to be eligible for the giveaway
 * @property Integer $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for
 * @property Integer $unclaimed_prize_count Optional. Number of undistributed prizes
 * @property True $only_new_members Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
 * @property True $was_refunded Optional. True, if the giveaway was canceled because the payment for it was refunded
 * @property String $prize_description Optional. Description of additional giveaway prize
 */
class GiveawayWinners {

}
