<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Users;
class getController extends Controller
{
	public function index(){

		return view("frontEnd.index");
	}
	public function about(){

		return view("frontEnd.about");
	}
	public function profile(){

		return view('frontEnd.userprofile');
	}
	public function register(){
		return redirect('register');
	}
	public function register_continue(){
		return view('auth.register_continue');
	}
	public function a(){
		return view('a');
	}
	public function newsroom(){
		return view('frontEnd.newsroom');
	}
	public function events(){
		return view('frontEnd.events');
	}
	public function graduates(){
		return view('frontEnd.graduates');
	}
	public function contact(){
		return view('frontEnd.contact');
	}		
}
