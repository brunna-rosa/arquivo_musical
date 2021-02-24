 
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
						<a href="<?php echo e(url('tracks/inserir')); ?>" class="nav-link mm1 active" style="font-size:16px;">Cadastrar</a>
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

					<?php $__currentLoopData = $tracks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr> 
						<td><?php echo e($track->id); ?></td>
						<td><?php echo e($track->nome); ?></td>
						<td><?php echo e($track->duracao); ?>.s</td>
						<td><?php echo e($track->album); ?></td>
						<td><?php echo e($track->ordem); ?></td>
						<td>
							<a href="<?php echo e(route('tracks.edit', $track->id)); ?>" class="btn" title="Editar Faixa"><i class="fas fa-edit" alt="Editar Faixa"></i></a>
							<a href="<?php echo e(route('tracks.delete', $track->id)); ?>" class="btn" title="Remover Faixa"><span style="color: red;"><i class="fas fa-times-circle" alt="Remover Faixa"></i></span></a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table> 
			</div>
		</div>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>