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
			'services' => ['Service Desk Corporativo', 'NOC', 'Service Desk TIC', 'SOC', 'Premium'] 
		);
		return view('pages.services')->with($data);
	}	
 }
