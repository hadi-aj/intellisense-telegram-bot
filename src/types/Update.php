<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 * 
 * @property Integer  $update_id  The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @property Message  $message  Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @property Message  $edited_message  Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property Message  $channel_post  Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @property Message  $edited_channel_post  Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property BusinessConnection  $business_connection  Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
 * @property Message  $business_message  Optional. New message from a connected business account
 * @property Message  $edited_business_message  Optional. New version of a message from a connected business account
 * @property BusinessMessagesDeleted  $deleted_business_messages  Optional. Messages were deleted from a connected business account
 * @property MessageReactionUpdated  $message_reaction  Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
 * @property MessageReactionCountUpdated  $message_reaction_count  Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
 * @property InlineQuery  $inline_query  Optional. New incoming inline query
 * @property ChosenInlineResult  $chosen_inline_result  Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @property CallbackQuery  $callback_query  Optional. New incoming callback query
 * @property ShippingQuery  $shipping_query  Optional. New incoming shipping query. Only for invoices with flexible price
 * @property PreCheckoutQuery  $pre_checkout_query  Optional. New incoming pre-checkout query. Contains full information about checkout
 * @property Poll  $poll  Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
 * @property PollAnswer  $poll_answer  Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @property ChatMemberUpdated  $my_chat_member  Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @property ChatMemberUpdated  $chat_member  Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
 * @property ChatJoinRequest  $chat_join_request  Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
 * @property ChatBoostUpdated  $chat_boost  Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
 * @property ChatBoostRemoved  $removed_chat_boost  Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
 * 
 */
class Update {
    
}
