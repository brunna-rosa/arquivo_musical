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
				<form action="{{route('albums.update', $albums->id)}}" method="post">
					{{csrf_field()}}
					{{ method_field('PATCH') }} 

					<div class="form-group">
						<label>Nome: </label>
						<input class="form-control" type="text" name="nome" maxlength="80" value="{{$albums-> nome}}" placeholder="Nome Álbum" required>
					</div>

					<div class="form-group">
						<label>Lançamento: </label>
						<input class="form-control" type="date" name="ano" value="{{$albums-> ano}}" placeholder="Ano Lançamento" required>
					</div>

					<div class="form-group">
						<label>Artista: </label>
						<input class="form-control" type="text" name="artista" maxlength="80" value="{{$albums-> artista}}" placeholder="Artista" required>
					</div>

					<div class="form-group">
						<label>Faixas: </label>
						<select name="faixas" class="form-control" placeholder="Selecione as faixas" id="faixas">
							<option value="">Selecione</option>
						</select>
					</div>
					<div class=" d-flex justify-content-end">	
						<input type="hidden" name="Gravar" id="Gravar" value="Salvar">
						<button  style="float:right"  class="btn btn-lg btn-success">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


	</div>
</div>

@endsection

@section('my-scripts')
<script>
axios.get('/api/tracks')
.then((e) =>{
	var tracks = e.data;

	tracks.forEach((e)=>{
		let option = new Option(e.nome, e.id)
		$("#faixas").append(option)
	})

	console.log(tracks)
})
</script>
@stop 
