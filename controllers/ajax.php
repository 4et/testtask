<?php

class Ajax extends Controller
{
	public function __construct()
	{
        parent::__construct();
	}
    public function index($data)
    {
        $data1 = json_encode($data);
        echo $data1;
    }
    public function getCity()
    {
         $data = $this->model->getCity();
         return $data;
    }
    public function getDistrict()
    {
         $data = $this->model->getDistrict();
         return $data;
    }
}