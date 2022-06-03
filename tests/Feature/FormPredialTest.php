<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormPredialTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_formulario_predial_funcionando()
    {
        $response = $this->get('/p');

        $response->assertStatus(200);
    }
}
