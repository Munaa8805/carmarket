<?php


class Pages extends Controller
{
    public function __construct()
    {
    

    }

    public function index()
    {
       
    
        $data = [
            'title' => 'Welcome',
            'description' => 'Simple social network built on the NiceAppMVC PHP framework'
           

        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
           $data = [
            'title' => 'About Us.',
            'description' => 'Our expert technicians. Best in the world.'
           
        ];
        $this->view('pages/about', $data);
    }
    public function service()
    {

        $data = [
            'title' => 'Services us.',
            'description' => 'Simple social network built on the NiceAppMVC PHP framework'
           
        ];
        $this->view('pages/service', $data);
    }


    public function contact()
    {

           $data = [
            'title' => 'Contact us.',
            'description' => 'It is a nice to us.'
           
           
         
        ];
        $this->view('pages/contact', $data);
    }
}
