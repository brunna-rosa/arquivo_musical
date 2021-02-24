@extends('layouts.app') 
@section('content')
 
<div class="container">
    <div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a href="{{ url('albums') }}" class="nav-link mm2" style="font-size:16px;">Listar</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('albums/inserir') }}" class="nav-link mm1 active" style="font-size:16px;">Cadastrar</a>
					</li>
				</ul>
			</div>

			<div class="panel-body">
				<div class="table-responsive ">
					<table class="table text-center table-bordered table-striped ">
					<caption>Lista de Álbuns</caption>
						<thead class="thead-light">
						<tr>
							<th> Código </th>
							<th> Nome </th>
							<th> Ano de Lançamento</th>
							<th> Artista </th>
							<th> Faixas </th>
							<th> Ações</th> 
						</tr>
						</thead>
						<tbody>
						@foreach($albums as $album)
						<tr>
							<td>{{$album-> id}}</td>
							<td>{{$album-> nome}}</td>
							<td>{{date_format(new DateTime($album-> ano), 'd-m-Y')}}</td>
							<td>{{$album-> artista}}</td>
							<td>
								<button type="button" class="btn" data-toggle="modal" data-target="#detailsModal">
									<i class="fas fa-search" alt="Detalhes"></i>
								</button>
							</td>
							<td> 
								<a href="{{ route('albums.edit', $album->id) }}" class="btn" title="Editar Álbum"><i class="fas fa-edit" alt="Editar Álbum"></i></a>
								<a href="{{ route('albums.delete', $album->id) }}" class="btn" title="Remover Álbum"><span style="color: red;"><i class="fas fa-times-circle" alt="Remover Álbum"></i></span></a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailsModalLabel">Detalhes do Álbum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

	  	<h5>Álbum: {{$album-> nome}}</h5>
	  	<h5>Artista: {{$album-> artista}}</h5>
	  	<h5>Lançamento: {{date_format(new DateTime($album-> ano), 'd-m-Y')}}</h5>

	  	<table class="table text-center table-bordered table-striped ">
			<thead class="thead-light">
				<tr>
					<th> Faixas </th>
				</tr>
			</thead>
			<tbody>
				@foreach($tracks as $tracks)
				<tr>
					<td>{{$tracks-> nome}}</td>
				</tr>
		  		@endforeach
			</tbody>
		</table>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection 