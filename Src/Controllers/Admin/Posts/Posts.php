<?php

namespace Src\Controllers\Admin\Posts;

use \Exception;
use Src\Controllers\Controller;
use Src\Helpers\Session;
use Src\Models\Post;

class Posts extends Controller
{
    public $post;

    private $authors = [
        '1' => 'Marcos Antônio',
        '2' => 'Felipe da Silva',
        '3' => 'Marcia dos Santos'
    ];

    public function __construct()
    {
        $this->post = new Post();
        Session::auth();
    }

    public function posts()
    {
        $params = [];
        $posts = $this->post->find()->fetch(true);
        foreach ($posts as $post) {
            /**
             * @todo A forma de realizar o relacionamento entre post e autor do post, não é adequada
             *       mas foi feito assim para dar tempo de entregar o site funcionando.
             */
            $post->author = '';
            if (array_key_exists($post->author_id, $this->authors)) {
                $post->author = $this->authors[$post->author_id];
            }

            $params[] = json_decode(json_encode($post->data()), 1);
        }

        $this->load('admin/posts/posts', ['posts' => $params]);
    }

    public function newPost()
    {
        $this->load('admin/posts/new_post');
    }

    public function createNewPost( $data )
    {
        try {
            $data = filter_var_array($data, [
                'author' => FILTER_SANITIZE_NUMBER_INT,
                'title' => FILTER_SANITIZE_STRING,
                'subtitle' => FILTER_SANITIZE_STRING,
                'text' => FILTER_SANITIZE_STRING
            ]);

            $this->post->author_id = $data['author'];
            $this->post->title = $data['title'];
            $this->post->subtitle = $data['subtitle'];
            $this->post->text = $data['text'];
            $this->post->active = 1;

            if ( !$this->post->save() ) {
                throw new Exception('Não foi possível realizar o cadastro. Tente novamente mais tarde.');
            }

            $this->router->redirect('admin/posts', [
                'success' => [ 'message' => 'Postagem cadastrada com sucesso!' ]
            ]);

        } catch (Exception $e) {
            $this->load('admin/posts/new_post', [
                'errors' => [ 'message' => $e->getMessage() ]
            ]);
        }
    }

    public function edit( $data )
    {
        $post = $this->post->findById( $data['id'] )->data();
        $this->load('admin/posts/edit_post', ['post' => $post]);
    }

    public function delete( $data )
    {
        $this->load('admin/posts/new_post', $data);
    }
}