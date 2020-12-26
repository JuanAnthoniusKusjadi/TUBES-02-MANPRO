<?php

class Grafik extends Controller
{
    public function index()
    {
        $page = $this::create_page('grafik', 'index');
        $page->render();
    }
}