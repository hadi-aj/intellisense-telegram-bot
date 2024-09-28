<?php

namespace HadiAj\IntelliSenseTelegramBot;

use HadiAj\IntelliSenseTelegramBot\types\KeyboardButton;
use HadiAj\IntelliSenseTelegramBot\types\ReplyKeyboardMarkup;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 */
class Keyboard extends ReplyKeyboardMarkup {

    /**
     * 
     * @param KeyboardButton $buttons
     */
    public function addRow(KeyboardButton ...$buttons)
    {
        $array = \json_decode(\json_encode($buttons), true);
        $this->keyboard[] = $array;
    }

    public function init()
    {
        return (array) $this;
    }

}
