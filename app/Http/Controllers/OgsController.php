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
		$ogs = $this->getOgsFromUrl();		
		return $this->showLiveJson($ogs);
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
    public function store()
    {	
		$ogs = $this->getOgsFromUrl();
		foreach($ogs as $og) {		
			if(Og::where('protocolo',  $og['PROTOCOLO'])->first()['protocolo'] == $og['PROTOCOLO']){
				Og::where('protocolo',  $og['PROTOCOLO'])->update(['obs' => $og['OBS']]);
				continue;
			}else{
				$ogToSave = new Og;
				$ogToSave->protocolo = $og['PROTOCOLO'];
				$ogToSave->fila = $og['FILA'];
				$ogToSave->status = $og['STATUS'];
				$ogToSave->data_abertura = $og['DT_ABERTURA'];
				$ogToSave->servico = $og['SERVICO'];
				$ogToSave->regional = $og['REGIONAL'];
				$ogToSave->localidade = $og['LOCALIDADE'];
				$ogToSave->descricao = $og['DESCRICAO'];
				
				if($og['INTERROMPEU'] == "Y"){
					$ogToSave->interrompeu = "Sim";
				}elseif($og['INTERROMPEU'] == "N"){
					$ogToSave->interrompeu = "Não";
				}else{
				$ogToSave->interrompeu = "Não informado";
				}
				
				$ogToSave->qtd_clientes = $og['QNT_CLIENTE'];
				$ogToSave->obs = $og['OBS'];
				$ogToSave->save();
			}
		}
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

	public function showSavedOgs()
    {
        $ogs =  Og::orderBy('protocolo', 'desc')->paginate(5);
        return view('ogs.list')->with('ogs', $ogs);
	}
    
    public function showLiveJson($ogs)
    {
		$ogs = collect($ogs)->sortBy('DT_ABERTURA')->reverse()->toArray();
		return view('ogs.index')->with('ogs', $ogs);
    }
	
	public function getOgsFromUrl()
    {
        $url = 'http://portaldesempenhohml.algartelecom.com.br/api/cor/pedro.php?usuario=pedrohas&senha=XpJkzk9qc';
		$ogs = json_decode(file_get_contents($url), true);
		return $ogs;
		//dd($ogs);
    }
}
