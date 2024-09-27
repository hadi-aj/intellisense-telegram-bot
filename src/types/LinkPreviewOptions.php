<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Describes the options used for link preview generation.
 *
 * @property Boolean $is_disabled Optional. True, if the link preview is disabled
 * @property String $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
 * @property Boolean $prefer_small_media Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property Boolean $prefer_large_media Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property Boolean $show_above_text Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
 */
class LinkPreviewOptions {

}
