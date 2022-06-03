<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TabelaDTITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tabela_dti_funcionando()
    {
        $response = $this->get('/tdti');

        $response->assertStatus(200);
    }
}
