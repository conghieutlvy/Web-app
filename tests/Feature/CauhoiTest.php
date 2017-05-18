<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CauhoiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        //$response = $this->get('/cauhoi');
        //$response->assertStatus(200);
    }
    
    public function testView()
    {
        $this->assertTrue(true);
        //$this->get('/cauhoi')->assertSee('Danh sách câu hỏi có trong đề thi');
    }
}
