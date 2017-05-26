<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomepageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    public function testView()
    {
        /**
         * Scenario: View home_page
         * Given I am on "http://thithulaixe.esy.es/"
         * Then I should see "Đề ngẫu nhiên"
         * And I should see "Thi theo bộ đề"
        **/
        $this->get('/')->assertSee('Đề ngẫu nhiên');
        $this->get('/')->assertSee('Thi theo bộ đề');
    }
}
