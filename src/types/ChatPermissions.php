<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @property Boolean $can_send_messages Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property Boolean $can_send_audios Optional. True, if the user is allowed to send audios
 * @property Boolean $can_send_documents Optional. True, if the user is allowed to send documents
 * @property Boolean $can_send_photos Optional. True, if the user is allowed to send photos
 * @property Boolean $can_send_videos Optional. True, if the user is allowed to send videos
 * @property Boolean $can_send_video_notes Optional. True, if the user is allowed to send video notes
 * @property Boolean $can_send_voice_notes Optional. True, if the user is allowed to send voice notes
 * @property Boolean $can_send_polls Optional. True, if the user is allowed to send polls
 * @property Boolean $can_send_other_messages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
 * @property Boolean $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages
 * @property Boolean $can_change_info Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @property Boolean $can_invite_users Optional. True, if the user is allowed to invite new users to the chat
 * @property Boolean $can_pin_messages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
 * @property Boolean $can_manage_topics Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
 */
class ChatPermissions {

}
