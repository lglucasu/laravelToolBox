<?php 

namespace lglucasu\laravelToolBox\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('laravelToolBox::toolbox');
    }   
}