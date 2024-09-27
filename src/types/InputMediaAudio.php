<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents an audio file to be treated as music to be sent.
 *
 * @property String $type Type of the result, must be audio
 * @property String $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property InputFile or String $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property String $caption Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
 * @property String $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property Integer $duration Optional. Duration of the audio in seconds
 * @property String $performer Optional. Performer of the audio
 * @property String $title Optional. Title of the audio
 */
class InputMediaAudio {

}
