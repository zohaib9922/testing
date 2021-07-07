<?php

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function works(){
        return view('pages.how-it-works');
    }
}
