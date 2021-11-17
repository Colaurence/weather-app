<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuccessfulGetCitiesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSuccessGetCitiesTest()
    {
      $response = $this->get('api/cities');
      $response->assertStatus(200);
    }
}
