<?php

namespace App\Http\Controllers;

use App\Og;
use Illuminate\Http\Request;


class OgsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$url = 'http://portaldesempenhohml.algartelecom.com.br/api/cor/pedro.php?usuario=pedrohas&senha=XpJkzk9qc';
		$ogs = json_decode(file_get_contents($url), true);
		//dd($ogs);
		
		foreach($ogs as $og) {
			$og['PROTOCOLO'];
			$og['FILA'];
			// to know what's in $og
			//echo '<pre>'; var_dump($og);
		}
		return view('ogs.index')->with('ogs', $ogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Og  $og
     * @return \Illuminate\Http\Response
     */
    public function show(Og $og)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Og  $og
     * @return \Illuminate\Http\Response
     */
    public function edit(Og $og)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Og  $og
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Og $og)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Og  $og
     * @return \Illuminate\Http\Response
     */
    public function destroy(Og $og)
    {
        //
    }
}
