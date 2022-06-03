<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TabelaODTITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tabela_ocorrencias_dti_funcionando()
    {
        $response = $this->get('/todti');

        $response->assertStatus(200);
    }
}
