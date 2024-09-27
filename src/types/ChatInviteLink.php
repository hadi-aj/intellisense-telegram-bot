<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents an invite link for a chat.
 *
 * @property String $invite_link The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @property User $creator Creator of the link
 * @property Boolean $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators
 * @property Boolean $is_primary True, if the link is primary
 * @property Boolean $is_revoked True, if the link is revoked
 * @property String $name Optional. Invite link name
 * @property Integer $expire_date Optional. Point in time (Unix timestamp) when the link will expire or has been expired
 * @property Integer $member_limit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property Integer $pending_join_request_count Optional. Number of pending join requests created using this link
 */
class ChatInviteLink {

}
