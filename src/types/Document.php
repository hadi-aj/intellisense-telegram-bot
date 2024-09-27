<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @property String $file_id Identifier for this file, which can be used to download or reuse the file
 * @property String $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property PhotoSize $thumbnail Optional. Document thumbnail as defined by sender
 * @property String $file_name Optional. Original filename as defined by sender
 * @property String $mime_type Optional. MIME type of the file as defined by sender
 * @property Integer $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 */
class Document {

}
