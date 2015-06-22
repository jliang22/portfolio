<?php namespace App\Http\Controllers;


class MainController extends Controller
{

    public function mainpage()
    {
        return view('main/main');

    }

    public function secondpage(){
        return view('main/hello');
    }

}