<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function tipo(){
return view('genero');
}
public function preferencia(){
return view('autor');
}
public function inicio(){
return view('book');
}
}
