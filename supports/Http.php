<?php
/**
 * @author drajathasan20@gmail.com
 * @email drajathasan20@gmail.com
 * @create date 2022-03-25 19:28:19
 * @modify date 2022-03-25 19:31:05
 * @license GPLv3
 * @desc [description]
 */

namespace Fll\Supports;

class Http
{
    public function header(array $headerAttribute)
    {
        foreach ($headerAttribute as $attribute => $value) {
            header("{$attribute}: {$value}");
        }
    }

    public function refresh()
    {
        
    }
}