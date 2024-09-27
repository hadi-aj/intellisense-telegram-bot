<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 *
 * @property String $type Type of the background, always “pattern”
 * @property Document $document Document with the pattern
 * @property BackgroundFillSolid|BackgroundFillGradient|BackgroundFillFreeformGradient $fill The background fill that is combined with the pattern
 * @property Integer $intensity Intensity of the pattern when it is shown above the filled background; 0-100
 * @property True $is_inverted Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
 * @property True $is_moving Optional. True, if the background moves slightly when the device is tilted
 */
class BackgroundTypePattern {

}
