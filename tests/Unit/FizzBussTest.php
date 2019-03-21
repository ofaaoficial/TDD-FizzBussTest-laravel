<?php

namespace Tests\Unit;

use App\FizzBuss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FizzBussTest extends TestCase
{
    /*
     * Prueba a evaluar la condicion o caso mas sencillo que podamos tener en el problema
     * Por ejemplo el primer valor sea 1.
     * */
    public function test_get_1_when_value_is_1(){
        //Instanciar una clase
        $fb = new FizzBuss();
        //lista a evaluar
        $list = $fb->getList();
        //Problema a evaluar
        $this->assertEquals(1, $list[0]);
    }

}
