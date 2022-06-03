<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormOcorrenciasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_formulario_ocorrencias_funcionando()
    {
        $response = $this->get('/o');

        $response->assertStatus(200);
    }
}
