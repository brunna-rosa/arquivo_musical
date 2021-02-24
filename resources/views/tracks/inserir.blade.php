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
				<form class="form-horizontal" action="{{url('tracks')}}" method="POST">
					<input type="hidden" name="acao" class="form-control" id="acao" value="">

					<div class="form-group">
						<label class="col-md-1 control-label">Nome</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="nome" maxlength="80" value="" placeholder="Nome Faixa" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-1 control-label">Duração</label>
						<div class="col-md-6">
							<input class="form-control" type="number" name="duracao" maxlength="80" value="" placeholder="Duração em segundos" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-1 control-label">Álbum</label>
						<div class="col-md-6">
							<select name="album" class="form-control" placeholder="Selecione o álbum" id="album" required>
								<option value="">Selecione</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-1 control-label">Ordem</label>
						<div class="col-md-6">
							<input class="form-control" type="number" name="ordem" maxlength="80" value="" placeholder="Ordem" required>
						</div>
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
@stop 

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
