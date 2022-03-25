<?php

namespace App\Controllers;

class Js extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function js1()
    {
        return view('js-workshop/js1');
    }
    public function js2()
    {
        return view('js-workshop/js2');
    }
    public function js3()
    {
        return view('js-workshop/js3');
    }
    public function js4()
    {
        return view('js-workshop/js4');
    }
}
