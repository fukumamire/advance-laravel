<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        //これは単なる確認のためのダミーのアサーションです。true が正しいことを確認しています。実際のテストコードではこれを削除しても構いません。↓
        $this->assertTrue(true);

        // ①
        $response = $this->get('/');
        // ②
        $response->assertStatus(200);

        // ③
        $response = $this->get('/no_route');
        // ④
        $response->assertStatus(404);
        
    }
}

