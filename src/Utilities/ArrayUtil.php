<?php

namespace LaravelDoctrine\ODM\Utilities;

class ArrayUtil
{
    public static function get(&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }
}
