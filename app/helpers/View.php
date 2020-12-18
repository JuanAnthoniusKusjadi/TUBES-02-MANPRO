<?php

class view
{
    protected $folder;
    protected $page;
    protected $data = array();

    public function __construct($folder, $page = 'index')
    {
        $this->folder = $folder;
        $this->page = $page;
    }

    public function __set($key, $data)
    {
        $this->data[$key] = $data;
    }

    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        } else {
            return null;
        }
    }

    public function render()
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        require_once VIEW_PATH . "templates/header.php";
        require_once VIEW_PATH . "pages/$this->folder/$this->page.php";
        require_once VIEW_PATH . "templates/footer.php";
        $content = ob_get_contents();
        ob_end_clean();

        ob_start();
        require_once VIEW_PATH . 'layout.php';
        $include = ob_get_contents();
        ob_end_clean();
        echo $include;
    }
}
