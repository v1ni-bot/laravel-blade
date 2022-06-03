<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TabelaOPredialTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tabela_ocorrencias_predial_funcionando()
    {
        $response = $this->get('/topredial');

        $response->assertStatus(200);
    }
}
