<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
/*
 	public function index(){
		return 'INDEX';
	}
 */	
    public function __construct(){
        $this->middleware('guest', ['except' => ['services', 'about']]);
    }
	
	public function index(){
		$title = "Dashboard Corporativo";
		//return view('pages.index')->with('title', $title);
		return view('pages.index', compact('title'));
	}
	
	public function about(){
		$title = "Sobre nós";
		return view('pages.about')->with('title', $title);
	}
	
	public function services(){
		$data = array(
			'title' => 'Nossos setores',
			'services' => ['Service Desk Corporativo', 'NOC', 'TIC', 'Premium'] 
		);
		return view('pages.services')->with($data);
	}
 }
