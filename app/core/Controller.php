<?php

require_once HELPER_PATH . 'View.php';
require_once HELPER_PATH . 'AuthHelper.php';

class Controller
{
    public static function create_page($folder = '', $page = 'index')
    {
        $page = new View($folder, $page);
        $page->title = $folder;
        if(self::get_user()) {
            $page->user_information = self::get_user();
        }
        return $page;
    }

    public static function auth_helper() {
        return new AuthHelper;
    }

    public static function get_user() {
        if(isset($_SESSION['login_session'])) {
            return $_SESSION['login_session'];
        }
        else {
            return false;
        }
    }

    public function redirect($tipe = null)
    {
        $page = rtrim($_SERVER['REQUEST_URI'], '/');
        $page = ltrim($page, '/');
        $page = explode('/', $page);
        $page_base = $page[0];

        echo $page_base;
    
        if(isset($tipe)) {
            header('location: /' . $page_base . "/" . $tipe);
        }
        else {
            header('location: /' . $page_base);
        }
    }
}
