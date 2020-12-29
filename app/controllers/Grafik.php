<?php

require MODEL_PATH . 'QueryData.php';

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
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Ymd');
        $page->countConfirmedTotal = $this->q_grafik->getCountConfirmedTotal();
        $page->countIsolatedTotal = $this->q_grafik->getCountIsolatedTotal();
        $page->countReleasedTotal = $this->q_grafik->getCountReleasedTotal();
        $page->countDeceasedTotal = $this->q_grafik->getCountDeceasedTotal();
        $page->dailyChangeTotalConfirmed = $this->q_grafik->getDailyChangeTotalConfirmed($date);
        $page->dailyChangeIsolated = $this->q_grafik->getDailyChangeTotalIsolated($date);
        $page->dailyChangeReleased = $this->q_grafik->getDailyChangeReleased($date);
        $page->dailyChangeDeceased = $this->q_grafik->getDailyChangeDeceased($date);
        $page->dailyCountInfected = $this->q_grafik->getCountInfectedDaily();
        $page->dailyCountReleased = $this->q_grafik->getCountReleasedDaily();
        $page->dailyCountDeceased = $this->q_grafik->getCountDeceasedDaily();
        $page->countGenderInfected = $this->q_grafik->getCountGenderInfected();
        $page->countGenderDeceased = $this->q_grafik->getCountGenderDeceased();
        $page->render();
    }
}