<?php


class Pages extends Controller
{
    public function index()
    {
        $data['pageTitle'] = 'Homepage';   
        
        $this->view('pages/home', $data);
    }

    public function about()
    {
        $data['pageTitle'] = 'About page';
        $this->view('pages/about', $data);
    }

    public function service()
    {
        $data['pageTitle'] = 'Service page';
        $this->view('pages/service', $data);
    }

    public function contact()
    {
        $data['pageTitle'] = 'Contact page';
        $this->view('pages/contact', $data);
    }
}

