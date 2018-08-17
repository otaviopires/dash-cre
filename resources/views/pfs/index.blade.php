@extends('layouts.app')

@section('content')
	<h1 align="center">Pesquisas de Falhas Abertas</h1>
	
	<table class="table table-hover table-bordered">
		<thead>
			<tr style="background-color:lightgreen;" align="center">
				<th scope="col" style="vertical-align:middle">Protocolo</th>
				<th scope="col" style="vertical-align:middle">Fila</th>
				<th scope="col" style="vertical-align:middle">Status</th>
				<th scope="col" style="vertical-align:middle">Data de abertura</th>
				<th scope="col" style="vertical-align:middle">Regional</th>
				<th scope="col" style="vertical-align:middle">Localidade</th>
			</tr>
		</thead>
	@foreach ($pfs as $pf)
		<tbody>
	        <tr class="accordion-toggler" data-toggle="collapse" data-target="#demo{{$pf['PROTOCOLO']}}" style="background-color:lightyellow; text-align:center">
			  <th scope="row">{{ $pf['PROTOCOLO'] }}</th>
			  <td>{{ $pf['FILA'] }}</td>
			  <td>{{ $pf['STATUS'] }}</td>
			  <td>{{ $pf['ENTRADA_FILA'] }}</td>
			  <td>{{ $pf['REGIONAL'] }}</td>
			  <td>{{ $pf['LOCALIDADE'] }}</td>
			
			</tr> 
			<tr>
				<td colspan="7" style="background-color:lightblue; color: #000000;">
					<div  id="demo{{$pf['PROTOCOLO']}}" class="accordian-collapse collapse mx-4">	
						<table class="table border-0" style="background-color:rgba(0, 0, 0, 0);">
							<tr>
								<td class="border-0" width="20%"><strong>Técnico:</strong></td>
								<td class="border-0 pull-left" width="30%" style="text-align:right;">{{$pf['TECNICO']}} <br></td>
							</tr>
							<tr>
								<td class="border-0" width="20%"><strong>Vencimento Anatel:</strong></td>
								<td class="border-0 pull-left" width="30%" style="text-align:right;">{{$pf['VENCIMENTO_ANATEL']}} <br></td>
							</tr>
							<tr>
								<td class="border-0" width="20%"><strong>Data de abertura:</strong></td>
								<td class="border-0 pull-left" width="30%" style="text-align:right;">{{$pf['DT_ABERTURA']}} <br></td>
							</tr>
							<tr>
								<td class="border-0" width="20%"><strong>Serviço:</strong></td>
								<td class="border-0 pull-left" width="30%" style="text-align:right;">{{$pf['SERVICO']}} <br></td>
							</tr>
						</table>
					</div> 
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@endsection
