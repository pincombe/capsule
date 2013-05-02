<?php
/**
 * A VERY simple wrapper class for the Laravel validation package.  This is only
 * to be used outside of a Laravel application.
 *
 * @author  Keith Pincombe <pincombe@gmail.com>
 */

namespace Capsule\Validation;

use Illuminate\Validation\Factory;
use Illuminate\Container\Container;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;

/**
 * A simple wrapper class for the Laravel Validation package.
 */
class Connection {

    /**
     * @var Factory  Holds the Validation\Factory object.
     */
    private static $factory = null;

    /**
     * Access the Validation\Factory
     *
     * @return  Illuminate\Validation\Factory
     */
    public static function getFactory()
    {
        if (is_null(self::$factory)) {
            self::$factory = new Factory(new Translator('en_US', new MessageSelector()), new Container);
        }

        return static::$factory;
    }



}
