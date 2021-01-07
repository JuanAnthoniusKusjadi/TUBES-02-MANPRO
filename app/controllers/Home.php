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
        $date = date('Ymd');
        $page = $this::create_page('home', 'index');
        $page->countConfirmedNational = $this->q_home->getCountConfirmedNational();
        $page->countIsolatedNational = $this->q_home->getCountIsolatedNational();
        $page->countReleasedNational = $this->q_home->getCountReleasedNational();
        $page->countDeceasedNational = $this->q_home->getCountDeceasedNational();
        $page->countByProvince = $this->q_home->getCountByProvince();
        $page->dailyChangeTotalConfirmed = $this->q_home->getDailyChangeTotalConfirmed($date);
        $page->dailyChangeIsolated = $this->q_home->getDailyChangeTotalIsolated($date);
        $page->dailyChangeReleased = $this->q_home->getDailyChangeReleased($date);
        $page->dailyChangeDeceased = $this->q_home->getDailyChangeDeceased($date);
        $page->render();
    }
}