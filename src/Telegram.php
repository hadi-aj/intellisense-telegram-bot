<?php

namespace HadiAj\IntelliSenseTelegramBot;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Stream;
use HadiAj\IntelliSenseTelegramBot\types\Update;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 * 
 * @method type getMe() A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
 * @method type logOut() Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns True on success. Requires no parameters.
 * @method type close() Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns True on success. Requires no parameters.
 * @method type sendMessage(array $params https://core.telegram.org/bots/api#sendmessage) Use this method to send text messages. On success, the sent Message is returned.
 * @method type forwardMessage(array $params https://core.telegram.org/bots/api#forwardmessage) Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
 * @method type forwardMessages(array $params https://core.telegram.org/bots/api#forwardmessages) Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of MessageId of the sent messages is returned.
 * @method type copyMessage(array $params https://core.telegram.org/bots/api#copymessage) Use this method to copy messages of any kind. Service messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
 * @method type copyMessages(array $params https://core.telegram.org/bots/api#copymessages) Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of MessageId of the sent messages is returned.
 * @method type sendPhoto(array $params https://core.telegram.org/bots/api#sendphoto) Use this method to send photos. On success, the sent Message is returned.
 * @method type sendAudio(array $params https://core.telegram.org/bots/api#sendaudio) For sending voice messages, use the sendVoice method instead.
 * @method type sendDocument(array $params https://core.telegram.org/bots/api#senddocument) Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
 * @method type sendVideo(array $params https://core.telegram.org/bots/api#sendvideo) Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 * @method type sendAnimation(array $params https://core.telegram.org/bots/api#sendanimation) Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
 * @method type sendVoice(array $params https://core.telegram.org/bots/api#sendvoice) Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as Audio or Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
 * @method type sendVideoNote(array $params https://core.telegram.org/bots/api#sendvideonote) As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
 * @method type sendMediaGroup(array $params https://core.telegram.org/bots/api#sendmediagroup) Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
 * @method type sendLocation(array $params https://core.telegram.org/bots/api#sendlocation) Use this method to send point on the map. On success, the sent Message is returned.
 * @method type sendVenue(array $params https://core.telegram.org/bots/api#sendvenue) Use this method to send information about a venue. On success, the sent Message is returned.
 * @method type sendContact(array $params https://core.telegram.org/bots/api#sendcontact) Use this method to send phone contacts. On success, the sent Message is returned.
 * @method type sendPoll(array $params https://core.telegram.org/bots/api#sendpoll) Use this method to send a native poll. On success, the sent Message is returned.
 * @method type sendDice(array $params https://core.telegram.org/bots/api#senddice) Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 * @method type sendChatAction(array $params https://core.telegram.org/bots/api#sendchataction) We only recommend using this method when a response from the bot will take a noticeable amount of time to arrive.
 * @method type setMessageReaction(array $params https://core.telegram.org/bots/api#setmessagereaction) Use this method to change the chosen reactions on a message. Service messages can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Returns True on success.
 * @method type getUserProfilePhotos(array $params https://core.telegram.org/bots/api#getuserprofilephotos) Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 * @method type getFile(array $params https://core.telegram.org/bots/api#getfile) Note: This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 * @method type banChatMember(array $params https://core.telegram.org/bots/api#banchatmember) Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type unbanChatMember(array $params https://core.telegram.org/bots/api#unbanchatmember) Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
 * @method type restrictChatMember(array $params https://core.telegram.org/bots/api#restrictchatmember) Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
 * @method type promoteChatMember(array $params https://core.telegram.org/bots/api#promotechatmember) Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 * @method type setChatAdministratorCustomTitle(array $params https://core.telegram.org/bots/api#setchatadministratorcustomtitle) Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 * @method type banChatSenderChat(array $params https://core.telegram.org/bots/api#banchatsenderchat) Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type unbanChatSenderChat(array $params https://core.telegram.org/bots/api#unbanchatsenderchat) Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type setChatPermissions(array $params https://core.telegram.org/bots/api#setchatpermissions) Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 * @method type exportChatInviteLink(array $params https://core.telegram.org/bots/api#exportchatinvitelink) Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
 * @method type createChatInviteLink(array $params https://core.telegram.org/bots/api#createchatinvitelink) Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 * @method type editChatInviteLink(array $params https://core.telegram.org/bots/api#editchatinvitelink) Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
 * @method type revokeChatInviteLink(array $params https://core.telegram.org/bots/api#revokechatinvitelink) Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
 * @method type approveChatJoinRequest(array $params https://core.telegram.org/bots/api#approvechatjoinrequest) Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 * @method type declineChatJoinRequest(array $params https://core.telegram.org/bots/api#declinechatjoinrequest) Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 * @method type setChatPhoto(array $params https://core.telegram.org/bots/api#setchatphoto) Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type deleteChatPhoto(array $params https://core.telegram.org/bots/api#deletechatphoto) Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type setChatTitle(array $params https://core.telegram.org/bots/api#setchattitle) Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type setChatDescription(array $params https://core.telegram.org/bots/api#setchatdescription) Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method type pinChatMessage(array $params https://core.telegram.org/bots/api#pinchatmessage) Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
 * @method type unpinChatMessage(array $params https://core.telegram.org/bots/api#unpinchatmessage) Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
 * @method type unpinAllChatMessages(array $params https://core.telegram.org/bots/api#unpinallchatmessages) Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
 * @method type leaveChat(array $params https://core.telegram.org/bots/api#leavechat) Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 * @method type getChat(array $params https://core.telegram.org/bots/api#getchat) Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on success.
 * @method type getChatAdministrators(array $params https://core.telegram.org/bots/api#getchatadministrators) Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
 * @method type getChatMemberCount(array $params https://core.telegram.org/bots/api#getchatmembercount) Use this method to get the number of members in a chat. Returns Int on success.
 * @method type getChatMember(array $params https://core.telegram.org/bots/api#getchatmember) Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
 * @method type setChatStickerSet(array $params https://core.telegram.org/bots/api#setchatstickerset) Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 * @method type deleteChatStickerSet(array $params https://core.telegram.org/bots/api#deletechatstickerset) Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 * @method type getForumTopicIconStickers(array $params https://core.telegram.org/bots/api#getforumtopiciconstickers) Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
 * @method type createForumTopic(array $params https://core.telegram.org/bots/api#createforumtopic) Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns information about the created topic as a ForumTopic object.
 * @method type editForumTopic(array $params https://core.telegram.org/bots/api#editforumtopic) Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method type closeForumTopic(array $params https://core.telegram.org/bots/api#closeforumtopic) Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method type reopenForumTopic(array $params https://core.telegram.org/bots/api#reopenforumtopic) Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method type deleteForumTopic(array $params https://core.telegram.org/bots/api#deleteforumtopic) Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
 * @method type unpinAllForumTopicMessages(array $params https://core.telegram.org/bots/api#unpinallforumtopicmessages) Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 * @method type editGeneralForumTopic(array $params https://core.telegram.org/bots/api#editgeneralforumtopic) Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights. Returns True on success.
 * @method type closeGeneralForumTopic(array $params https://core.telegram.org/bots/api#closegeneralforumtopic) Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 * @method type reopenGeneralForumTopic(array $params https://core.telegram.org/bots/api#reopengeneralforumtopic) Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically unhidden if it was hidden. Returns True on success.
 * @method type hideGeneralForumTopic(array $params https://core.telegram.org/bots/api#hidegeneralforumtopic) Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically closed if it was open. Returns True on success.
 * @method type unhideGeneralForumTopic(array $params https://core.telegram.org/bots/api#unhidegeneralforumtopic) Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 * @method type unpinAllGeneralForumTopicMessages(array $params https://core.telegram.org/bots/api#unpinallgeneralforumtopicmessages) Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 * @method type answerCallbackQuery(array $params https://core.telegram.org/bots/api#answercallbackquery) Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 * @method type getUserChatBoosts(array $params https://core.telegram.org/bots/api#getuserchatboosts) Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a UserChatBoosts object.
 * @method type getBusinessConnection(array $params https://core.telegram.org/bots/api#getbusinessconnection) Use this method to get information about the connection of the bot with a business account. Returns a BusinessConnection object on success.
 * @method type setMyCommands(array $params https://core.telegram.org/bots/api#setmycommands) Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
 * @method type deleteMyCommands(array $params https://core.telegram.org/bots/api#deletemycommands) Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
 * @method type getMyCommands(array $params https://core.telegram.org/bots/api#getmycommands) Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 * @method type setMyName(array $params https://core.telegram.org/bots/api#setmyname) Use this method to change the bot's name. Returns True on success.
 * @method type getMyName(array $params https://core.telegram.org/bots/api#getmyname) Use this method to get the current bot name for the given user language. Returns BotName on success.
 * @method type setMyDescription(array $params https://core.telegram.org/bots/api#setmydescription) Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns True on success.
 * @method type getMyDescription(array $params https://core.telegram.org/bots/api#getmydescription) Use this method to get the current bot description for the given user language. Returns BotDescription on success.
 * @method type setMyShortDescription(array $params https://core.telegram.org/bots/api#setmyshortdescription) Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns True on success.
 * @method type getMyShortDescription(array $params https://core.telegram.org/bots/api#getmyshortdescription) Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
 * @method type setChatMenuButton(array $params https://core.telegram.org/bots/api#setchatmenubutton) Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 * @method type getChatMenuButton(array $params https://core.telegram.org/bots/api#getchatmenubutton) Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
 * @method type setMyDefaultAdministratorRights(array $params https://core.telegram.org/bots/api#setmydefaultadministratorrights) Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns True on success.
 * @method type getMyDefaultAdministratorRights(array $params https://core.telegram.org/bots/api#getmydefaultadministratorrights) Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 * @method type Inline mode methods(array $params https://core.telegram.org/bots/api#inline-mode-methods) Please note, that it is currently only possible to edit messages without reply_markup or with inline keyboards.
 * @method type editMessageText(array $params https://core.telegram.org/bots/api#editmessagetext) Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type editMessageCaption(array $params https://core.telegram.org/bots/api#editmessagecaption) Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type editMessageMedia(array $params https://core.telegram.org/bots/api#editmessagemedia) Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type editMessageLiveLocation(array $params https://core.telegram.org/bots/api#editmessagelivelocation) Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type stopMessageLiveLocation(array $params https://core.telegram.org/bots/api#stopmessagelivelocation) Use this method to stop updating a live location message before live_period expires. On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type editMessageReplyMarkup(array $params https://core.telegram.org/bots/api#editmessagereplymarkup) Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method type stopPoll(array $params https://core.telegram.org/bots/api#stoppoll) Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 * @method type deleteMessage(array $params https://core.telegram.org/bots/api#deletemessage) Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted can_post_messages permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.Returns True on success.
 * @method type deleteMessages(array $params https://core.telegram.org/bots/api#deletemessages) Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns True on success.
 * 
 */
class Telegram {

    /**
     * @var string api Telegram url
     */
    public $apiUrl = 'https://api.telegram.org';

    /**
     * Token taken from botFather
     * @var string
     */
    public $botToken;

    /**
     * @var string
     */
    public $proxy;

    /**
     * @var Update
     */
    public $input;

    /**
     * @var Client
     */
    private $_client;

    public function __construct()
    {
        $this->setInput();
        $this->setClient();
    }

    public function __call($name, $arguments)
    {
        return $this->send("/{$name}", $arguments[0]);
    }

    /**
     * Respond to Telegram with a success message to avoid Webhook being called repeatedly 
     */
    public function responseToTelegram()
    {
        ignore_user_abort(true);
        set_time_limit(0);
        ob_start();
        // do initial processing here
        echo 'ok'; // send the response
        header('Connection: close');
        header('Content-Length: ' . ob_get_length());
        ob_end_flush();
        ob_flush();
        flush();
    }

    /**
     * @return Client
     */
    private function setClient()
    {
        if (empty($this->_client)) {
            $this->_client = new Client(['base_uri' => $this->apiUrl]);
        }
    }

    /**
     * 
     */
    public function setInput()
    {
        if (empty($this->input)) {
            $input = file_get_contents('php://input');
            if (!$input) {
                $this->input = null;
            } else {
                $this->input = \json_decode($input);
            }
        }
    }

    /**
     * initializeParams
     * @param array $params
     * @return array
     */
    public function initializeParams($params): array
    {
        $is_resource = false;
        $multipart = [];

        if (empty($params)) {
            return [];
        }

        //Reformat data array in multipart way if it contains a resource
        $attachments = ['photo', 'sticker', 'audio', 'document', 'video', 'voice', 'animation', 'video_note', 'thumb'];
        foreach ($params as $key => $item) {
            if ($key === 'media') {
                // Magical media input helper.
                $item = $this->mediaInputHelper($item, $is_resource, $multipart);
            } else if (in_array($key, $attachments, true) && file_exists($item)) {
                $file = fopen($item, 'rb');
                $is_resource |= is_resource($file);
                $multipart[] = ['name' => $key, 'contents' => $file];
            }


            $multipart[] = ['name' => $key, 'contents' => $item];
        }
        if ($is_resource) {

            return ['multipart' => $multipart];
        }

        return ['form_params' => $params];
    }

    /**
     * send request
     * @param String $method
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function send($method, $params = [])
    {
        $request_params = $this->initializeParams($params);
        if ($this->proxy) {
            $request_params = array_merge($request_params, ['proxy' => $this->proxy ]);
        }
        $response = $this->_client->post('/bot' . $this->botToken . $method, $request_params);
        return $this->response(\json_decode($response->getBody(), true));
    }

    /**
     * 
     */
    public function mediaInputHelper($item, bool &$is_resource, &$multipart)
    {
        $was_array = is_array($item);
        $was_array || $item = [$item];

        /** @var InputMedia|null $media_item */
        foreach ($item as $media_item) {
            if (!($media_item instanceof InputMedia)) {
                continue;
            }
            $possible_medias = array_filter([
                'media' => $media_item->media,
            ]);

            foreach ($possible_medias as $type => $media) {
                // Allow absolute paths to local files.
                $media = new Stream(fopen($media, 'rb'));
                $is_resource = true;
                $unique_key = uniqid($type . '_', false);
                $multipart[] = ['name' => $unique_key, 'contents' => $media];
            }
        }
        return \json_encode($item);
    }

    /**
     * 
     * @param string $body
     * @return Response
     */
    public function response($body)
    {
        return \json_decode(\json_encode($body));
    }

}
