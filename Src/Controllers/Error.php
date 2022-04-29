<?php

namespace Src\Controllers;

use Src\Controllers\Controller;

class Error extends Controller
{
    public function errorIdentification( $data )
    {
        $method = "error{$data['errcode']}";

        if( !method_exists($this, $method) ) {
            $this->error();
        }

        $this->{$method}();
    }

    public function error400()
    {
        $this->load('website/error', [
            'code' => 400,
            'title' => 'Página não encontrada!',
            'description' => 'Desculpa parça! Mas não encontramos a página que você está procurando.'
        ]);
    }

    public function error405()
    {
        $this->load('website/error', [
            'code' => 405,
            'title' => 'Método não permitido!',
            'description' => 'Desculpa parça! Mas parece que algo deu errado e ainda não sabemos o que pode ter ocorrido. Em breve iremos entender o que aconteceu e iremos ajustar.'
        ]);
    }

    public function error()
    {
        $this->load('website/error', [
            'code' => null,
            'title' => null,
            'description' => 'Desculpa parça! Mas algo aconteceu que ainda não identificamos. Tente novamente mais tarde.'
        ]);
    }
}