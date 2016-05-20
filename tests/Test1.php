<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Test1 extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test1()
    {
        $this->visit('/')
             ->see('GitMoss');
    }
}
