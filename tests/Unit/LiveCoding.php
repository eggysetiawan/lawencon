<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class LiveCoding extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $value = "1.225.441";

        dd(explode(".", $value));
    }
}
