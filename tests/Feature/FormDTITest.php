<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormDTITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_formulario_dti_funcionando()
    {
        $response = $this->get('/d');

        $response->assertStatus(200);
    }
}
