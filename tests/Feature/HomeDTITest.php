<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeDTITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_dti_funcionando()
    {
        $response = $this->get('/hdti');

        $response->assertStatus(200);
    }
}
