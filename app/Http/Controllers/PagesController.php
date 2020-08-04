<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
		$tasks = [
			'get up',
			'go to work',
			'go to the pub',
			'get a pint',
			'get another',
			'and annother',
			'fall over',
		];

		$name = request('name') ?? 'A. N. Other';

		//  return view('welcome', [
		//  	'name' => $name', // Grabs title from the request string in the URL.
		//  	'tasks' => $tasks,
		//  ]);

		// or

		// return view('welcome')->withTasks($tasks)->withName($name);

	  	return view('welcome')
	  			->withTasks($tasks)
	  			->withName($name);

    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }
}
