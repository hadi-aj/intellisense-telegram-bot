<?php

namespace HadiAj\IntelliSenseTelegramBot;

use app\modules\telegram\types\InlineKeyboardButton;

/**
 * @author Hadi Alizadeh Jalali <hadi.alizadeh.jalali@gmail.com>
 */
class InlineKeyboard {

    public $inline_keyboard = [];

    /**
     * Empty Callback
     */
    const EMPTY = ' ';

    /**
     * 
     * @param InlineKeyboardButton $buttons
     */
    public function addRow(InlineKeyboardButton ...$buttons)
    {
        // Chech only text set
        foreach ($buttons as $button) {
            if (count(get_object_vars($button)) == 1) {
                $button->callback_data = self::EMPTY;
            }
        }

        $array = \json_decode(\json_encode($buttons), true);
        $this->inline_keyboard[] = $array;
    }

    public function init()
    {
        return (array) $this;
    }

}
