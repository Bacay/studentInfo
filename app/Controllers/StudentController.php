<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function student($product)
    {
        echo $product;
    }
    public function sherwinski()
    {
        return view('students');
    }
    public function index()
    {
        //
    }
}
