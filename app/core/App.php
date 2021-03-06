<?php

require_once HELPER_PATH . 'Router.php';
class App
{
    public function __construct()
    {
        // PAGE HOME
        Router::get('/', function () {
            $this::call('home')->index();
        });

        // ADMIN PAGE
        Router::get('/admin', function () {
            $this::call('admin')->index();
        });

        Router::post('/admin', function () {
            $this::call('admin')->index();
        });

        // USER PAGE
        Router::get('/user', function () {
            $this::call('userController')->page_user();
        });

        // USER ENDPOINT
        Router::post('/user', function () {
            $this::call('userController')->page_user();
        });

        // LOGIN & LOGOUT PAGE
        Router::get('/login', function () {
            $this::call('auth')->page_login();
        });

        Router::post('/login', function () {
            $this::call('auth')->page_login();
        });

        Router::get('/logout', function () {
            $this::call('auth')->page_logout();
        });
        
        // EXTRA PAGE
        Router::get('/sample', function () {
            $this::call('sample')->index();
        });

        // GRAFIK PAGE
        Router::get('/data', function () {
            $this::call('grafik')->index();
        });
        
        Router::run();
    }

    public static function call(string $controller_name)
    {
        require_once CONTROLLER_PATH . ucfirst($controller_name) . '.php';
        return new $controller_name;
    }
}
