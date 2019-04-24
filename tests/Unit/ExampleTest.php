<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $panjang = 5;
        $lebar = 10;
        $hasil = $panjang * $lebar;
        
        $this->getNumAssertions($hasil);
    }
}
