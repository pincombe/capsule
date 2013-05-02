<?php
/**
 * A simple wrapper class for the Laravel Validation package.  This is only
 * to be used outside of a Laravel application.
 *
 * @author  Keith Pincombe <pincombe@gmail.com>
 */

namespace Capsule;

use Illuminate\Validation\Factory;
use Illuminate\Container\Container;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;

/**
 * A simple wrapper class for the Laravel Validation package.
 */
class Validator
{

    /**
     * @var Factory  Holds the Validation\Factory object.
     */
    private static $_factory = null;

    /**
     * Passes calls through to the Validation\Factory.
     *
     * @param   string  The method name
     * @param   array   The method parameters sent
     * @return  mixed   The result of the call
     */
    public static function __callStatic($method, $parameters)
    {
        if (is_null(self::$_factory)) {
            self::$_factory = new Factory(new Translator('en_US', new MessageSelector()), new Container);
        }

        return call_user_func_array(array(static::$_factory, $method), $parameters);
    }

}
