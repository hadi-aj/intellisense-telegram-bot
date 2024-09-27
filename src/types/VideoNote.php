<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @property String $file_id Identifier for this file, which can be used to download or reuse the file
 * @property String $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property Integer $length Video width and height (diameter of the video message) as defined by sender
 * @property Integer $duration Duration of the video in seconds as defined by sender
 * @property PhotoSize $thumbnail Optional. Video thumbnail
 * @property Integer $file_size Optional. File size in bytes
 */
class VideoNote {

}
