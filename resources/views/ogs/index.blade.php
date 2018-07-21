@extends('layouts.app')

@section('content')
	<h1></h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">PROTOCOLO</th>
				<th scope="col">FILA</th>
				<th scope="col">DT_ABERTURA</th>
				<th scope="col">SERVICO</th>			  
				<th scope="col">REGIONAL</th>
				<th scope="col">LOCALIDADE</th>
				<th scope="col">DESCRICAO</th>			  
				<th scope="col">INTERROMPEU</th>
				<th scope="col">QNT_CLIENTE</th>
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
				<td class="hiddenRow" style="width: 100%;" colspan="9">
					<div id="demo{{$i}}" class="accordian-body collapse"> 
						{{$og['OBS']}}
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@endsection
