<?php

require MODEL_PATH . 'QueryHome.php';

class Grafik extends Controller
{
    protected $q_grafik;

    public function __construct()
    {
        $this->q_grafik = new QueryData();
    }

    public function index()
    {
        $page = $this::create_page('grafik', 'index');
        $page->countConfirmedTotal = $this->q_grafik->getCountConfirmedTotal();
        $page->countIsolatedTotal = $this->q_grafik->getCountIsolatedTotal();
        $page->countReleasedTotal = $this->q_grafik->getCountReleasedTotal();
        $page->countDeceasedTotal = $this->q_grafik->getCountDeceasedTotal();
        $page->render();
    }
}