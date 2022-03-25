<?php
/**
 * @author drajathasan20@gmail.com
 * @email drajathasan20@gmail.com
 * @create date 2022-03-25 19:02:18
 * @modify date 2022-03-25 19:07:54
 * @license GPLv3
 * @desc [description]
 */

namespace Fll\Supports;

use utility as Utility;

class Session
{
    public static function check($callBack = '')
    {
        $State = Utility::isMemberLogin();

        if (is_callable($callBack)) return $callBack();

        return $State;
    }
}