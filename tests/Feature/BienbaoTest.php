<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BienbaoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/bienbao');
        $response->assertStatus(200);
    }

    public function testView()
    {
        /**
         * Scenario: Bienbao_page
         * Given I am on "http://thithulaixe.esy.es/bienbao"
         * Then I should see "Các loại biển báo giao thông đường bộ"
        **/
        $this->get('/bienbao')->assertSee('Các loại biển báo giao thông đường bộ');
    }
}
