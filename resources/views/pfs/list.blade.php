@extends('layouts.app')

@section('content')
	<h1 align="center">Histórico de PFs</h1>
	
	{!! Form::open(['method'=>'GET','url'=>'/find','role'=>'search'])  !!}
	<div class="input-group custom-search-form">
		<input type="text" class="form-control" name="search" placeholder="Procurar...">
        <span class="input-group-btn">
			<button class="btn btn-default-sm" type="submit">
				<a class="fa fa-search">Procurar</a>
			</button>
		</span>
	</div>
	
	<!-- <form action="/search" method="GET"> -->
		<!-- <input type="text" name="category" required/> -->
		<!-- <button type="submit">Submit</button> -->
	<!-- </form> -->
	
	<table class="table table-hover table-bordered">
		<thead>
			<tr style="background-color:lightgreen;" align="center">
				<th scope="col" style="vertical-align:middle">Protocolo</th>
				<th scope="col" style="vertical-align:middle">Fila</th>
				<th scope="col" style="vertical-align:middle">Status</th>
				<th scope="col" style="vertical-align:middle">Data de abertura</th>
				<th scope="col" style="vertical-align:middle">Serviço</th>			  
				<th scope="col" style="vertical-align:middle">Regional</th>
				<th scope="col" style="vertical-align:middle">Localidade</th>
				<th scope="col" style="vertical-align:middle">Interrompeu?</th>
				<th scope="col" style="vertical-align:middle">Quantidade de clientes</th>
			</tr>
		</thead>
	@foreach ($pfs as $i=>$pf)
		<tbody>
	       <!-- <tr data-toggle="collapse" data-target="#demo{{$i}}" class="accordion-toggle" style="background-color:lightyellow; text-align:center"> -->
			  <th scope="row">{{ $pf['protocolo'] }}</th>
			  <td>{{ $pf['fila'] }}</td>
			  <td>{{ $pf['status'] }}</td>
			  <td>{{ $pf['data_abertura'] }}</td>
			  <td>{{ $pf['servico'] }}</td>
			  <td>{{ $pf['regional'] }}</td>
			  <td>{{ $pf['localidade'] }}</td>
			  <td>{{ $pf['interrompeu'] }}</td>
			  <td>{{ $pf['qtd_clientes'] }}</td>		
			</tr> 
			<tr>
				<td class="hiddenRow" colspan="9"  style="background-color:lightblue">
					<div id="demo{{$i}}" class="accordian-body collapse"> 
						<p>
							<strong>Descrição:</strong>
							{{$pf['descricao']}}			
						</p>						
						<p>
							<!-- {{$og['OBS']}} -->
							{!! nl2br(e($pf['obs'])) !!}
						</p>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
    {{$pfs->links()}}	
@endsection
