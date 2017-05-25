<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    protected $mappings = [
        1 => 1
    ];

    public function testEncordingWorksAsExpected()
    {
        $math = new App\Helpers\Math;

        foreach ($this->mappings as $key => $value) {
            $this->assertEquals($value, $math->encode($key));
        }
    }
}



