<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidGetWeatherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testValidGetWeatherTest()
    {
        $response = $this->get('api/weather/Quezon');
        $response->assertStatus(200);
                
    }
}
