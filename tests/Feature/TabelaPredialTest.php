<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TabelaPredialTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tabela_predial_funcionando()
    {
        $response = $this->get('/tpredial');

        $response->assertStatus(200);
    }
}
