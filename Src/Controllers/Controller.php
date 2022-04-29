<?php

namespace Src\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    protected function load( string $view, $params = [] )
    {
        $twig = new Environment( new FilesystemLoader('./Src/views/') );
        $twig->addGlobal('URL_BASE', URL_BASE);
        echo $twig->render( $view.'.twig.php', $params );
    }
}