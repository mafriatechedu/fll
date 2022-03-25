<?php
/**
 * @author drajathasan20@gmail.com
 * @email drajathasan20@gmail.com
 * @create date 2022-03-25 19:08:05
 * @modify date 2022-03-25 19:27:41
 * @license GPLv3
 * @desc [description]
 */

namespace Fll\Supports;

class Url
{   
    public static function baseUrl($additionalUrlOrClosure = '')
    {
        $baseUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];

        if (is_callable($additionalUrlOrClosure)) return $additionalUrlOrClosure($baseUrl);

        return $baseUrl . $additionalUrlOrClosure;
    }

    public static function redirect(string $redirectTo = '')
    {
        return static::baseUrl($redirectTo);
    }

    public static function getQuery(string $key, bool $string = false)
    {
        if (isset($_GET[$key])) return $_GET[$key];

        return $string ? $_SERVER['QUERY_STRING'] : $_GET;
    }

    public static function combineQuery(array $query)
    {
        return array_unique(array_merge(static::getQuery(), $query));
    }
}