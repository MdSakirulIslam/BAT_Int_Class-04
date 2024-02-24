<?php


namespace App\classes;


class Welcome
{
    public $message;
    public function __construct()
    {
        $this->message="This is Session-04 Task";
    }

    public function index()
    {
        return view('home');
    }
}