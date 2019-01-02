<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * @test
     */
    public function api_customersにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }
}
