<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainRequest;
//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(MainRequest $request)
    {
        dd($request);
    }
}
