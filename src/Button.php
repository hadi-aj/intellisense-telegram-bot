<?php

namespace HadiAj\IntelliSenseTelegramBot;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 */
class Button extends types\KeyboardButton {

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
