@extends('layouts.app')

@section('content')
	<h1 align="center">Falhas em Andamento</h1>
	
	{!! Form::open(['method'=>'GET','url'=>'/ogs','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
	<div class="input-group custom-search-form">
		<input type="text" class="form-control" name="search" placeholder="Procurar...">
        <span class="input-group-btn">
			<button class="btn btn-default-sm" type="submit">
				<a class="fa fa-search">Procurar</a>
			</button>
		</span>
	</div>
	
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
	@foreach ($ogs as $i=>$og)
		<tbody>
	        <tr data-toggle="collapse" data-target="#demo{{$i}}" class="accordion-toggle" style="background-color:lightyellow; text-align:center">
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
				<td class="hiddenRow" colspan="7"  style="background-color:lightblue">
					<div id="demo{{$i}}" class="accordian-body collapse"> 
						<p>
							<strong>Descrição:</strong>
							{{$og['DESCRICAO']}}			
						</p>						
						<p>
							<!-- {{$og['OBS']}} -->
							{!! nl2br(e($og['OBS'])) !!}
						</p>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@endsection
