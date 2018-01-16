<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimodel extends Model
{
    //
    /**
     * aqui conexão secundária com seu banco de dados remoto
     * @var string
     */
    protected $connection = 'mysql2';

    // simples desse jeito, so chamar o nome da propria model + metodos do eloquent ORM
    public static function pegarTodosNomes()
    {
        return Multimodel::All();

}
