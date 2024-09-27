<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @property String $poll_id Unique poll identifier
 * @property Chat $voter_chat Optional. The chat that changed the answer to the poll, if the voter is anonymous
 * @property User $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous
 * @property Integer[] $option_ids 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
 */
class PollAnswer {

}
