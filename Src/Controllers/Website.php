<?php

namespace Src\Controllers;

use Exception;
//use BD\Database\Data;
use Src\Controllers\Controller;
use Src\Models\User;
use Src\Models\Post;

class Website extends Controller
{
    public $router;

    public $post;

    public $user;

    public function __construct( $router )
    {
        $this->router = $router;
        $this->post = new Post();
        $this->user = new User();
    }

    public function registerPost( $form )
    {
        /** @todo Realizar a abstração de cada funcionalidade */

        try {
            // validação dos campo do formulário
            $data = filter_var_array($form, [
                'name' => FILTER_SANITIZE_STRING,
                'email' => FILTER_SANITIZE_STRING,
                'password' => FILTER_SANITIZE_STRING,
                'confirm_password' => FILTER_SANITIZE_STRING
            ]);

            // verificando se o usuário já esta cadastrado
            $thereIsUser = $this->user->find("email=:email", "email={$data['email']}")->count();
            if ( $thereIsUser ) {
                throw new Exception('Usuário já cadastrado!');
            }

            // verificando a confirmação da senha
            if ( $data['password'] != $data['confirm_password'] ) {
                throw new Exception('O campo \'Confirmação de Senha\' não conferem.');
            }

            // salvando os dados do usuário
            $this->user->name = $data['name'];
            $this->user->email = $data['email'];
            $this->user->password = $data['password'];

            if ( !$this->user->save() ) {
                throw new Exception('Não foi possível realizar o cadastro. Tente novamente mais tarde.');
            }

            $this->router->redirect('web.signin');

        } catch (Exception $e) {
            $this->load('website/register', [
                'errors' => [ 'message' => $e->getMessage() ]
            ]);
        }
    }

    /**
     * Displays the registration form for the new user.
     * @param $data
     * @return void
     */
    public function register( $data )
    {
        $this->load('website/register');
    }

    public function signin()
    {
        $this->load('website/signin', [
            'title' => 'Entrar'
        ]);
    }

    public function index()
    {
        $params = [];
        $posts = $this->post->find()->fetch(true);
        foreach ($posts as $post) {
            $params[] = json_decode(json_encode($post->data()), 1);
        }

        $this->load('website/index', ['posts' => $params]);
    }
}