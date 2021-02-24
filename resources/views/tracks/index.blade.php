@extends('layouts.app') 
@section('content') 

<div class="container">
    <div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a href="{{ url('tracks') }}" class="nav-link mm2" style="font-size:16px;">Listar</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('tracks/inserir') }}" class="nav-link mm1 active" style="font-size:16px;">Cadastrar</a>
					</li>
				</ul>
			</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table text-center table-bordered table-striped ">
				<caption>Lista de Faixas</caption>
					<thead class="thead-light">
					<tr>
						<th> Código </th>
						<th> Nome </th>
						<th> Duração</th> 
						<th> Álbum </th>
						<th> Ordem </th>
						<th> Ações </th>
					</tr>
					</thead>
					<tbody>

					@foreach($tracks as $track)
					<tr> 
						<td>{{ $track->id }}</td>
						<td>{{ $track->nome }}</td>
						<td>{{ $track->duracao }}.s</td>
						<td>{{ $track->album }}</td>
						<td>{{ $track->ordem }}</td>
						<td>
							<a href="{{route('tracks.edit', $track->id)}}" class="btn" title="Editar Faixa"><i class="fas fa-edit" alt="Editar Faixa"></i></a>
							<a href="{{route('tracks.delete', $track->id)}}" class="btn" title="Remover Faixa"><span style="color: red;"><i class="fas fa-times-circle" alt="Remover Faixa"></i></span></a>
						</td>
					</tr>
					@endforeach
					</tbody>
				</table> 
			</div>
		</div>
@stop   