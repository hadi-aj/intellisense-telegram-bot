<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a change of a reaction on a message performed by a user.
 *
 * @property Chat $chat The chat containing the message the user reacted to
 * @property Integer $message_id Unique identifier of the message inside the chat
 * @property User $user Optional. The user that changed the reaction, if the user isn't anonymous
 * @property Chat $actor_chat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
 * @property Integer $date Date of the change in Unix time
 * @property ReactionType[] $old_reaction Previous list of reaction types that were set by the user
 * @property ReactionType[] $new_reaction New list of reaction types that have been set by the user
 */
class MessageReactionUpdated {

}
