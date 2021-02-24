<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
		<div class="panel panel-default">

			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a href="<?php echo e(url('albums')); ?>" class="nav-link mm2" style="font-size:16px;">Listar</a>
					</li> 
					<li class="nav-item">
						<a href="<?php echo e(url('albums/inserir')); ?>" class="nav-link mm1 active" style="font-size:16px;">Cadastrar</a>
					</li>
				</ul>
			</div>

			<div class="panel-body">
				<form action="<?php echo e(route('albums.update', $albums->id)); ?>" method="post">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('PATCH')); ?> 

					<div class="form-group">
						<label>Nome: </label>
						<input class="form-control" type="text" name="nome" maxlength="80" value="<?php echo e($albums-> nome); ?>" placeholder="Nome Álbum" required>
					</div>

					<div class="form-group">
						<label>Lançamento: </label>
						<input class="form-control" type="date" name="ano" value="<?php echo e($albums-> ano); ?>" placeholder="Ano Lançamento" required>
					</div>

					<div class="form-group">
						<label>Artista: </label>
						<input class="form-control" type="text" name="artista" maxlength="80" value="<?php echo e($albums-> artista); ?>" placeholder="Artista" required>
					</div>

					<div class="form-group">
						<label>Faixas: </label>
						<select name="faixas" class="form-control" placeholder="Selecione as faixas" id="faixas">
							<option value="">Selecione</option>
						</select>
					</div>

					<!-- <div class="form-group">
						<label class="col-md-1 control-label">Nome:</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="nome" maxlength="80" value="<?php echo e($albums-> nome); ?>" placeholder="Nome Álbum" required>
						</div>
					</div> 

					<div class="form-group">
						<label class="col-md-1 control-label">Lançamento:</label>
						<div class="col-md-6">
							<input class="form-control" type="date" name="ano" value="<?php echo e($albums-> ano); ?>" placeholder="Ano Lançamento" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-1 control-label">Artista:</label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="artista" maxlength="80" value="<?php echo e($albums-> artista); ?>" placeholder="Artista" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-1 control-label">Faixas: </label>
						<div class="col-md-6">
							<select name="faixas" class="form-control" placeholder="Selecione as faixas" id="faixas">
								<option value="">Selecione</option>
							</select>
						</div>
					</div>-->

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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('my-scripts'); ?>
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
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>