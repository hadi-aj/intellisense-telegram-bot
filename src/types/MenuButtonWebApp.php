<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * Represents a menu button, which launches a Web App.
 *
 * @property String $type Type of the button, must be web_app
 * @property String $text Text on the button
 * @property WebAppInfo $web_app Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
 */
class MenuButtonWebApp {

}
