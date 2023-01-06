<?php
class DatesUtilsPolyfen
{

    private static $emojis = array(

        "1" => "✨✨✨",
        "2" => "🎄🎄🎄",
        "3" => "🍄🍄🍄",
        "4" => "🎱🎱🎱",
        "5" => "🧝‍♂️🧝‍♂️🧝‍♂️",
        "6" => "🤡🤡🤡",
        "7" => "💖💖💖",
        "8" => "🐧🐧🐧",
        "9" => "🔥🔥🔥",
        "10" => "🦓🦓🦓",
        "11" => "🌻🌻🌻",
        "12" => "💛💛💛"
    );

    public static function getEmojiHelloBar()
    {
        return self::$emojis[date('n')];
    }

    public static function getCurrentMonthName()
    {
        return date('F');
    }
}
