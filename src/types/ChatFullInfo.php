<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object contains full information about a chat.
 *
 * @property Integer $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property String $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property String $title Optional. Title, for supergroups, channels and group chats
 * @property String $username Optional. Username, for private chats, supergroups and channels if available
 * @property String $first_name Optional. First name of the other party in a private chat
 * @property String $last_name Optional. Last name of the other party in a private chat
 * @property True $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
 * @property Integer $accent_color_id Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
 * @property Integer $max_reaction_count The maximum number of reactions that can be set on a message in the chat
 * @property ChatPhoto $photo Optional. Chat photo
 * @property String[] $active_usernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
 * @property Birthdate $birthdate Optional. For private chats, the date of birth of the user
 * @property BusinessIntro $business_intro Optional. For private chats with business accounts, the intro of the business
 * @property BusinessLocation $business_location Optional. For private chats with business accounts, the location of the business
 * @property BusinessOpeningHours $business_opening_hours Optional. For private chats with business accounts, the opening hours of the business
 * @property Chat $personal_chat Optional. For private chats, the personal channel of the user
 * @property ReactionType[] $available_reactions Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
 * @property String $background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
 * @property Integer $profile_accent_color_id Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
 * @property String $profile_background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
 * @property String $emoji_status_custom_emoji_id Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
 * @property Integer $emoji_status_expiration_date Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
 * @property String $bio Optional. Bio of the other party in a private chat
 * @property True $has_private_forwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
 * @property True $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
 * @property True $join_to_send_messages Optional. True, if users need to join the supergroup before they can send messages
 * @property True $join_by_request Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
 * @property String $description Optional. Description, for groups, supergroups and channel chats
 * @property String $invite_link Optional. Primary invite link, for groups, supergroups and channel chats
 * @property Message $pinned_message Optional. The most recent pinned message (by sending date)
 * @property ChatPermissions $permissions Optional. Default chat member permissions, for groups and supergroups
 * @property Integer $slow_mode_delay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
 * @property Integer $unrestrict_boost_count Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
 * @property Integer $message_auto_delete_time Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
 * @property True $has_aggressive_anti_spam_enabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
 * @property True $has_hidden_members Optional. True, if non-administrators can only get the list of bots and administrators in the chat
 * @property True $has_protected_content Optional. True, if messages from the chat can't be forwarded to other chats
 * @property True $has_visible_history Optional. True, if new chat members will have access to old messages; available only to chat administrators
 * @property String $sticker_set_name Optional. For supergroups, name of the group sticker set
 * @property True $can_set_sticker_set Optional. True, if the bot can change the group sticker set
 * @property String $custom_emoji_sticker_set_name Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
 * @property Integer $linked_chat_id Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @property ChatLocation $location Optional. For supergroups, the location to which the supergroup is connected
 */
class ChatFullInfo {

}
