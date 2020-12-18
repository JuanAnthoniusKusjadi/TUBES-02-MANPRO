<?php

require_once HELPER_PATH . 'Router.php';
class App
{
    public function __construct()
    {
        // PAGE HOME
        Router::get('/home', function () {
            $this::call('home')->index();
        });
        
        // EXTRA PAGE
        Router::get('/sample', function () {
            $this::call('sample')->index();
        });

        Router::run();
    }

    public static function call(string $controller_name)
    {
        require_once CONTROLLER_PATH . $controller_name . '.php';
        return new $controller_name;
    }
}
