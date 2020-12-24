<?php

require MODEL_PATH . 'QueryHome.php';

class Home extends Controller
{
    protected $q_home;
    
    public function __construct()
    {
        $this->q_home = new QueryHome();
    }
    
    public function index()
    {
        $page = $this::create_page('home', 'index');
        $page->countConfirmedNational = $this->q_home->getCountConfirmedNational();
        $page->countIsolatedNational = $this->q_home->getCountIsolatedNational();
        $page->countReleasedNational = $this->q_home->getCountReleasedNational();
        $page->countDeceasedNational = $this->q_home->getCountDeceasedNational();
        $page->countByProvince = $this->q_home->getCountByProvince();
        $page->render();
    }
}