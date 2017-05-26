<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DangthiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/dangthi');
        $response->assertStatus(200);
    }
    
    public function testView()
    {
        /**
         * Scenario: View Dangthi_page
         * Given I am on "http://thithulaixe.esy.es/dangthi"
         * Then I should see "Các dạng thi lái xe"
        **/
        $this->get('/dangthi')->assertSee('Các dạng thi lái xe');
    }
}
