<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlayTest extends TestCase
{
    /**
     * A basic test example.
     *  @dataProvide mydata
     * @return void
     */
    public function testExample()
    {
      $num = 1;
        $this->assertEquals(1,$num);
    }

    public function testAdd($a,$b,$ans){
      $this->assertEquals($ans,$a+$b);
    }

    public function mydata(){
      return [
        [1,2,3],
        [2,2,4],
      ];
    }
}
