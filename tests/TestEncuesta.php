<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestEncuesta extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Index()
    {
        $this->visit('/')
             ->see('encuestas');
    }

    public function testButtonEncuestas()
    {
    $this->visit('/')
         ->click('Encuestas')
         ->seePageIs('/');
    }

    public function testRegistroUsuario()
    {
    $this->visit('/')
         ->type($name, 'name')
         ->type($email, 'email')
         ->type($password, 'password')
         ->select($value, 'genero')
         ->press('Registrar')
         ->seePageIs('/Bienvenida');
    }
}
