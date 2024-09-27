<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 *
 * @property Boolean $from_request Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
 * @property String $web_app_name Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
 * @property Boolean $from_attachment_menu Optional. True, if the access was granted when the bot was added to the attachment or side menu
 */
class WriteAccessAllowed {

}
