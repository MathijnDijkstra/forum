<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
		return view('welcome');
	}
	public function about()
	{
	$people = ['test', 'test2', 'test3'];
    return view('about', compact('people'));

	}
}
