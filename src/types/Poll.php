<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object contains information about a poll.
 *
 * @property String $id Unique poll identifier
 * @property String $question Poll question, 1-300 characters
 * @property MessageEntity[] $question_entities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
 * @property PollOption[] $options List of poll options
 * @property Integer $total_voter_count Total number of users that voted in the poll
 * @property Boolean $is_closed True, if the poll is closed
 * @property Boolean $is_anonymous True, if the poll is anonymous
 * @property String $type Poll type, currently can be “regular” or “quiz”
 * @property Boolean $allows_multiple_answers True, if the poll allows multiple answers
 * @property Integer $correct_option_id Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 * @property String $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property MessageEntity[] $explanation_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @property Integer $open_period Optional. Amount of time in seconds the poll will be active after creation
 * @property Integer $close_date Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 */
class Poll {

}
