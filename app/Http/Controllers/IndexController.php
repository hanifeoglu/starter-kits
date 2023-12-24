<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Index');
        //return Inertia::render('Index');
    }
}
