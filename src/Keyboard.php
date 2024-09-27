<?php

namespace HadiAj\IntelliSenseTelegramBot;

use app\modules\telegram\types\KeyboardButton;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 */
class Keyboard extends types\ReplyKeyboardMarkup {

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
