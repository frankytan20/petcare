<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
    	return view('service-post.healths');
    }

    public function store()
    {
    	Post::create([
    		'pet_name' => request('pet_name'),
    		'type' => request('type'),
    		'age' => request('age'),
    		'owner_name' => request('owner_name'),
    		'phone' => request('phone'),
    		'complain' => request('complain'),
    		'adress' => request('address'),
    	]);
    }
}
