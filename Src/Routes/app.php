<?php

use BD\Router\Router;

$router = new Router( URL_BASE );

/**
 * Website
 */
$router->namespace("Src\Controllers")->group(null);
$router->post( "/register", "Website:registerPost" );

$router->get( "/register", "Website:register", "web.register" );
$router->get( "/signin", "Website:signin", "web.signin");
$router->get( "/home", "Website:index" );
$router->get( "/", "Website:index" );

/**
 * Admin
 */
$router->namespace("Src\Controllers\Admin")->group('admin');
$router->get("/posts/edit/{id}", "Posts\Posts:edit" );
$router->get("/posts/del/{id}", function() {
    echo '<h1>Ooops! Não deu tempo de implementar. =)</h1>';
    echo '<a href="javascript:void();" onclick="history.go(-1)">VOLTAR</>';
});
$router->get("/posts", "Posts\Posts:posts" );
$router->get("/posts/new", "Posts\Posts:newPost" );
$router->get("/signout", "Signin:signout" );
$router->get("/dashboard", "Dashboard:home" );
$router->post("/signin", "Signin:signinPost" );
$router->post("/posts/new", "Posts\Posts:createNewPost" );
$router->post("/posts/edit/{id}", function() {
    echo '<h1>Ooops! Não deu tempo de implementar. =)</h1>';
    echo '<a href="javascript:void();" onclick="history.go(-1)">VOLTAR</>';
});


/**
 * Group Error
 * This monitors all Router errors. Are they:
 *  400 Bad Request,
 *  404 Not Found,
 *  405 Method Not Allowed
 *  501 Not Implemented
 */
$router->namespace("Src\Controllers")->group("error");
$router->get("/{errcode}", "Error:errorIdentification");

/**
 * This method executes the routes
 */
$router->dispatch();

/**
 * Redirect all errors
 */
if ( $router->error() ) {
    $router->redirect("/error/{$router->error()}");
}