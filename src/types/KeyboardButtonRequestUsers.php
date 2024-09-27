<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
 *
 * @property Integer $request_id Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
 * @property Boolean $user_is_bot Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
 * @property Boolean $user_is_premium Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
 * @property Integer $max_quantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
 * @property Boolean $request_name Optional. Pass True to request the users' first and last names
 * @property Boolean $request_username Optional. Pass True to request the users' usernames
 * @property Boolean $request_photo Optional. Pass True to request the users' photos
 */
class KeyboardButtonRequestUsers {

}
