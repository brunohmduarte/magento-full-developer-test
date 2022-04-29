<?php

namespace Src\Controllers\Admin;

use \Exception;
use Src\Controllers\Controller;
use Src\Helpers\Session;
use Src\Models\User;

class Signin extends Controller
{
    public $router;

    public function __construct( $router )
    {
        $this->router = $router;
    }

    public function signinPost( $data )
    {
        try {
            $data = filter_var_array($data, [
                'email' => FILTER_SANITIZE_STRING,
                'password' => FILTER_SANITIZE_STRING
            ]);

            $user = new User();
            $register = $user->find("email=:email", "email={$data['email']}")->fetch();
            if ( !$register ) {
                throw new Exception('Usuário não existe!');
            }

            if ( $register->email != $data['email'] || $register->password != $data['password'] ) {
                throw new Exception('Usuário ou Senha inválidos!');
            }

            $userSession = json_decode(json_encode($register->data()), 1);

            Session::start('users', $userSession);

            echo 'Redirecionando para a rota: admin/dashboard...<br>';
            $this->router->redirect('admin/dashboard');

        } catch (Exception $e) {
            $this->load('website/signin', [
                'errors' => [ 'message' => $e->getMessage() ]
            ]);
        }
    }

    public function signout()
    {
        Session::destroy('users');
        $this->router->redirect('/signin');
    }
}