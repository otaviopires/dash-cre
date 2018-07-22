@extends('layouts.app')

@section('content')
	<h1></h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col" style="vertical-align:middle" align="left">Protocolo</th>
				<th scope="col" style="vertical-align:middle" align="left">Fila</th>
				<th scope="col" style="vertical-align:middle">Status</th>
				<th scope="col" style="vertical-align:middle">Data de abertura</th>
				<th scope="col" style="vertical-align:middle">Serviço</th>			  
				<th scope="col" style="vertical-align:middle">Regional</th>
				<th scope="col" style="vertical-align:middle">Localidade</th>
				<th scope="col" style="vertical-align:middle">Interrompeu?</th>
				<th scope="col" style="vertical-align:middle">Quantidade de clientes</th>
			</tr>
		</thead>
	@foreach ($ogs as $i=>$og)
		<tbody>
	        <tr data-toggle="collapse" data-target="#demo{{$i}}" class="accordion-toggle">
			  <th scope="row">{{ $og['PROTOCOLO'] }}</th>
			  <td>{{ $og['FILA'] }}</td>
			  <td>{{ $og['STATUS'] }}</td>
			  <td>{{ $og['DT_ABERTURA'] }}</td>
			  <td>{{ $og['SERVICO'] }}</td>
			  <td>{{ $og['REGIONAL'] }}</td>
			  <td>{{ $og['LOCALIDADE'] }}</td>
			  <td>{{ $og['INTERROMPEU'] }}</td>
			  <td>{{ $og['QNT_CLIENTE'] }}</td>		
			</tr> 
			<tr>
				<td class="hiddenRow" colspan="9">
					<div id="demo{{$i}}" class="accordian-body collapse"> 
						<p>
							<strong>Descrição:</strong>
							{{$og['DESCRICAO']}}			
						</p>						
						<p>
							<strong>Observação:</strong>
							{{$og['OBS']}}
						</p>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@endsection
