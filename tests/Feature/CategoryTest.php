<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    // use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/category',
        [
            'names' => ['ahmed','احمد'],

            'language_codes'=> ['en','ar'],

            'descriptions'=> ["description",'تفاصيل'],

            ]);

  
        $response->assertStatus(200);
    }
}
