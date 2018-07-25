<?php

namespace App\Http\Controllers;

use App\Massiva;
use Illuminate\Http\Request;
use Modules\Core\Interfaces\IDatabase;
use Illuminate\Support\Facades\DB;

class MassivasController extends Controller
{
	public function tela()
    { 
        $url = 'http://portaldesempenhohml.algartelecom.com.br/api/cor/pedro.php?usuario=pedrohas&senha=XpJkzk9qc';

		$contents = file_get_contents($url);
		$contents = utf8_encode($contents);
		$results = json_decode($contents, true);
		echo "<pre>";
		//print_r($results); 

		foreach ($results as $key => $value) {
			//if ($value[INTERROMPEU] == "Y")

			$resultado = $this->databaseService->filter("id", "diario","protocolo", $value[PROTOCOLO]);
			if (empty($resultado)) {
				//print_r($value);
				$this->salvaBancoOG($value);
			}
			$arrayProtocolos[] = $value[PROTOCOLO];
		}
        echo "<pre>";
        print_r($arrayProtocolos);

        // ===================== FINALIZANDO AS OGS QUE FORAM ENCERRADAS ==================
        $res_protocolo = $this->databaseService->filter("id", "diario","status", "Em aberto");
		foreach ($res_protocolo as $valor):
			$protocolo = $valor->protocolo;
			$status = $valor->status;
			$id = $valor->id;
			if (!in_array($protocolo, $arrayProtocolos, true)) {
				$data_fim = date_create('now')->format('Y-m-d H:i:s'); //data e hora atual
				$array = array(
				'data_fim'      => $data_fim,
				'status'        => "Finalizado"
				);
				$this->databaseService->update($id, $array, "diario");
			}else
				$this->atualizaBanco($id, $protocolo, $results);
        endforeach;
        // ===================== exibindo as ogs ==================
        $resultado = $this->databaseService->selectAllDesc("id", "diario");
        //include 'app/view/Diario/tela.php';
    }

    public function atualizaBanco($id, $protocolo, $results) 
	{
        $data_registro = date_create('now')->format('Y-m-d H:i:s'); //data e hora atual
        foreach ($results as $key => $value) {
            if($protocolo == $value[PROTOCOLO]){
                $array = array(
                    'regional'      => $value[REGIONAL],
                    'localidade'    => $value[LOCALIDADE],
                    'descricao'     => utf8_decode($value[DESCRICAO]),
                    'massiva'       => $value[INTERROMPEU],
                    'qnt_cliente'   => $value[QNT_CLIENTE],
                    'obs'           => utf8_decode($value[OBS]),
                    'data_registro' => $data_registro
                );
                $this->databaseService->update($id, $array, "diario");
            }
        }
        echo "<pre>";
        print_r($array);
        
    }
	function salvaBancoOG($value) 
	{
        $data_registro = date_create('now')->format('Y-m-d H:i:s'); //data e hora atual
		$data_fim =  "0000-00-00 00:00:00";

        if ($value[PROTOCOLO] == null)
            $value[PROTOCOLO] = " ";
        if ($value[FILA] == null)
            $value[FILA] = " ";
        if ($value[STATUS] == null)
            $value[STATUS] = " ";

		mysql_query("INSERT INTO 'diario' (protocolo, fila, status) VALUES ($value[PROTOCOLO],$value[FILA],$value[STATUS])"); //envia para o banco de dados
    }

    function dados() 
	{
		$url = 'http://portaldesempenhohml.algartelecom.com.br/api/cor/pedro.php?usuario=pedrohas&senha=XpJkzk9qc';

		$contents = file_get_contents($url);
		$contents = utf8_encode($contents);
		$results = json_decode($contents, true);
		echo "<pre>";
		print_r($results); 		
		foreach ($results as $key => $value) { 
			//$results é o conteudo que veio daquela url
			$this->salvaBancoOG($value); //ele pega cada linha armazena no $value e envia para uma função com o nome salvaBancoOG
		
		} 
	}	
}
