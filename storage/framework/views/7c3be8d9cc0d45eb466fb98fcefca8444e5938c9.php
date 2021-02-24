<?php $__env->startSection('content'); ?>
  
<div class="container">
    <div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a href="<?php echo e(url('tracks')); ?>" class="nav-link mm2" style="font-size:16px;">Listar</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo e(url('tracks/inserir')); ?>" class="nav-link mm1 active" style="font-size:16px;">Editar</a>
					</li>
				</ul>
			</div>
		<div class="panel-body">
			<div class="col-md-6"> 
				<form action="<?php echo e(route('tracks.update', $tracks->id)); ?>" method="post">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PATCH')); ?> 

				<h5 id="titulo">Editar Faixas</h5>

				<div class="form-group">
					<label>Nome: </label>
					<input class="form-control" type="text" name="nome" maxlength="80" value="<?php echo e($tracks-> nome); ?>" placeholder="Nome Faixa" required>
				</div>
	
				<div class="form-group">
					<label>Duração: </label>
					<input class="form-control" type="number" name="duracao" maxlength="80" value="<?php echo e($tracks-> duracao); ?>" placeholder="Duração em segundos" required>
				</div>
				
				<div class="form-group">
					<label>Álbum: </label>
					<select name="album" class="form-control" placeholder="Selecione o álbum" id="album" required>
						<option value=""></option>
					</select>
				</div>

				<div class="form-group">
					<label >Ordem: </label>
					<input class="form-control" type="number" name="ordem" maxlength="80" value="<?php echo e($tracks-> ordem); ?>" placeholder="Ordem" required>
				</div>			
				<div class=" d-flex justify-content-end">	
					<input type="hidden" name="Gravar" id="Gravar" value="Salvar">
					<button  style="float:right"  class="btn btn-lg btn-success">Salvar</button>
				</div>
	    		</form>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('my-scripts'); ?>
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
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>