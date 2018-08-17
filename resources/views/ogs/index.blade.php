@extends('layouts.app')

@section('content')
	<h1 align="center">Falhas em Andamento</h1>
	
	<table class="table table-hover table-bordered">
		<thead>
			<tr style="background-color:lightgreen;" align="center">
				<th scope="col" style="vertical-align:middle">Protocolo</th>
				<th scope="col" style="vertical-align:middle">Fila</th>
				<th scope="col" style="vertical-align:middle">Status</th>
				<th scope="col" style="vertical-align:middle">Data de abertura</th>
				<!-- <th scope="col" style="vertical-align:middle">Serviço</th>			   -->
				<th scope="col" style="vertical-align:middle">Regional</th>
				<th scope="col" style="vertical-align:middle">Localidade</th>
				<th scope="col" style="vertical-align:middle">Interrompeu?</th>
				<!-- <th scope="col" style="vertical-align:middle">Quantidade de clientes</th> -->
			</tr>
		</thead>
	@foreach ($ogs as $og)
		<tbody>
	        <tr class="accordion-toggler" data-toggle="collapse" data-target="#demo{{$og['PROTOCOLO']}}" style="background-color:lightyellow; text-align:center">
			  <th scope="row">{{ $og['PROTOCOLO'] }}</th>
			  <td>{{ $og['FILA'] }}</td>
			  <td>{{ $og['STATUS'] }}</td>
			  <td>{{ $og['DT_ABERTURA'] }}</td>
			  <!-- <td>{{ $og['SERVICO'] }}</td> -->
			  <td>{{ $og['REGIONAL'] }}</td>
			  <td>{{ $og['LOCALIDADE'] }}</td>
			  
			  @if($og['INTERROMPEU']=='Y')
				<td>Sim</td>
			  @elseif($og['INTERROMPEU']=='N')
				<td>Não</td>
			  @else
				<td>Não informado</td>
			  @endif
			  
			  <!-- <td>{{ $og['QNT_CLIENTE'] }}</td>		 -->
			</tr> 
			<tr>
				<td colspan="7" style="background-color:lightblue; color: #000000;">
					<div  id="demo{{$og['PROTOCOLO']}}" class="accordian-collapse collapse mx-4">	
						<ul>
							<li>
								<strong>Descrição:</strong>
								{{$og['DESCRICAO']}}			
							</li>
							<li>
								{!! nl2br(e($og['OBS'])) !!}
							</li>
						</ul>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@endsection
