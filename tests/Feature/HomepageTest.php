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
        $this->get('/')->assertSee('Đề ngẫu nhiên');
        $this->get('/')->assertSee('Thi theo bộ đề');
    }

    public function testChangToMeo()
    {

    }
}
