<?php

namespace HadiAj\IntelliSenseTelegramBot;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 */
class InlineButton extends types\InlineKeyboardButton {

    public $text;

    /**
     * 
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

}
