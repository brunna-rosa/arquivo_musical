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
						<a href="{{ url('tracks/inserir') }}" class="nav-link mm1 active" style="font-size:16px;">Editar</a>
					</li>
				</ul>
			</div>
		<div class="panel-body">
			<div class="col-md-6"> 
				<form action="{{route('tracks.update', $tracks->id)}}" method="post">
				{{csrf_field()}}
				{{ method_field('PATCH') }} 

				<h5 id="titulo">Editar Faixas</h5>

				<div class="form-group">
					<label>Nome: </label>
					<input class="form-control" type="text" name="nome" maxlength="80" value="{{$tracks-> nome}}" placeholder="Nome Faixa" required>
				</div>
	
				<div class="form-group">
					<label>Duração: </label>
					<input class="form-control" type="number" name="duracao" maxlength="80" value="{{$tracks-> duracao}}" placeholder="Duração em segundos" required>
				</div>
				
				<div class="form-group">
					<label>Álbum: </label>
					<select name="album" class="form-control" placeholder="Selecione o álbum" id="album" required>
						<option value=""></option>
					</select>
				</div>

				<div class="form-group">
					<label >Ordem: </label>
					<input class="form-control" type="number" name="ordem" maxlength="80" value="{{$tracks-> ordem}}" placeholder="Ordem" required>
				</div>			
				<div class=" d-flex justify-content-end">	
					<input type="hidden" name="Gravar" id="Gravar" value="Salvar">
					<button  style="float:right"  class="btn btn-lg btn-success">Salvar</button>
				</div>
	    		</form>
			</div>
		</div>

@endsection

@section('my-scripts')
<script>
axios.get('/api/albums')
.then((e) =>{
	var albums = e.data;

	albums.forEach((e)=>{
		let option = new Option(e.nome, e.id)
		$("#album").append(option)
	})

	console.log(albums)
})
</script>
@stop 
