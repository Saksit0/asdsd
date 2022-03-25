<?php

namespace App\Controllers;

class Bootstrap extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bootstrap1()
    {
        return view('Bootstrap_Workshop/bootstrap1');
    }
    public function bootstrap2()
    {
        return view('Bootstrap_Workshop/bootstrap2');
    }
    public function jq3()
    {
        return view('jquery_Workshop/jq3');
    }
    public function jq4()
    {
        return view('jquery_Workshop/jq4');
    }
    public function jq5()
    {
        return view('jquery_Workshop/jq5');
    }
    public function jq6()
    {
        return view('jquery_Workshop/jq6');
    }
}
