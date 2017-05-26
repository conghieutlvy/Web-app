<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MeoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/meo');
        $response->assertStatus(200);
    }
    
    public function testView()
    {
        /**
         * Scenario: View Meo_page
         * Given I am on "http://thithulaixe.esy.es/meo"
         * Then I should see "CÁC MẸO GHI NHỚ" 
        **/
        $this->get('/meo')->assertSee('CÁC MẸO GHI NHỚ');
    }

}
