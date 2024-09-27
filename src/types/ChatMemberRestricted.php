<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @property String $status The member's status in the chat, always “restricted”
 * @property User $user Information about the user
 * @property Boolean $is_member True, if the user is a member of the chat at the moment of the request
 * @property Boolean $can_send_messages True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property Boolean $can_send_audios True, if the user is allowed to send audios
 * @property Boolean $can_send_documents True, if the user is allowed to send documents
 * @property Boolean $can_send_photos True, if the user is allowed to send photos
 * @property Boolean $can_send_videos True, if the user is allowed to send videos
 * @property Boolean $can_send_video_notes True, if the user is allowed to send video notes
 * @property Boolean $can_send_voice_notes True, if the user is allowed to send voice notes
 * @property Boolean $can_send_polls True, if the user is allowed to send polls
 * @property Boolean $can_send_other_messages True, if the user is allowed to send animations, games, stickers and use inline bots
 * @property Boolean $can_add_web_page_previews True, if the user is allowed to add web page previews to their messages
 * @property Boolean $can_change_info True, if the user is allowed to change the chat title, photo and other settings
 * @property Boolean $can_invite_users True, if the user is allowed to invite new users to the chat
 * @property Boolean $can_pin_messages True, if the user is allowed to pin messages
 * @property Boolean $can_manage_topics True, if the user is allowed to create forum topics
 * @property Integer $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
 */
class ChatMemberRestricted {

}
