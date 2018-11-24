<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Classes\AwesomeClass;   // импортируем  созданный класс

class TestController extends Controller{
    protected $awesome;

    public function __construct(Request $request, AwesomeClass $awesome)
    {
        parent::__construct($request);
        $this->awesome = $awesome;
    }


    public function awesomeMethod(){
        $a = resolve('App\Classes\AwesomeClass');
        var_dump($a->getCounter());


        $b = resolve('App\Classes\AwesomeClass');
        var_dump($b->getCounter());



    }


}
