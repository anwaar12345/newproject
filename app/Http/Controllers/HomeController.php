<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
function show(){
$post = new Post;
	$info = $post->data();
	return view('home',compact('info'));

}


}
