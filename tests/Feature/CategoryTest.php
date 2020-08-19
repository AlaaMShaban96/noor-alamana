<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->post('/category',
        [
            'name' => 'Sally',
            'language_code'=>1,
            'name'=>"alaa",
            'description'=>"alaa",
            
            ]);
            
  
        $response->assertStatus(200);
    }
}
