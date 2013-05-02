<?php
/**
 * A simple wrapper class for the Laravel Validation package.  This is only
 * to be used outside of a Laravel application.
 *
 * @author  Keith Pincombe <pincombe@gmail.com>
 */

namespace Capsule;

/**
 * A simple wrapper class for the Laravel Validation package.
 */
class Validator {

    /**
     * Passes calls through to the Connection object.
     *
     * @param   string  The method name
     * @param   array   The method parameters sent
     * @return  mixed   The result of the call
     */
    public static function __callStatic($method, $parameters) {
        return call_user_func_array(array(Validation\Connection::getFactory(), $method), $parameters);
    }
}
