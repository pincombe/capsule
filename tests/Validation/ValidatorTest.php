<?php
/**
 * Tests the Validator facade
 *
 * @author Keith Pincombe <pincombe@gmail.com>
 */

include_once __DIR__.'/../../../../autoload.php';

class ValidationTest extends PHPUnit_Framework_TestCase
{

    public function testInterface()
    {
        $validator = Capsule\Validator::make(
            array('name' => 'Dayle'),
            array('name' => 'required|min:5')
        );

        $this->assertInstanceOf('Illuminate\Validation\Validator', $validator);
    }


}