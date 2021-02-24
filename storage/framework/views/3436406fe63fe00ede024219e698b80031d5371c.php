<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <h1 class="display-4 fw-normal">Arquivo Musical</h1>
            <p class="lead fw-normal">Suas faixas e álbuns preferidos em um só lugar.</p><br>

            <?php if(Auth::guest()): ?>
                <a class="btn btn-link" href="<?php echo e(url('login')); ?>">Começar</a>
            <?php else: ?>
                <a href="<?php echo e(url('tracks/inserir')); ?>" class="btn btn-outline-primary">Cadastrar Faixas</a>
                <a href="<?php echo e(url('albums/inserir')); ?>" id="albuns" class="btn btn-outline-secondary">Cadastrar Álbuns</a>
            <?php endif; ?>

        </div>
    </div>  
</div>

<!-- 
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div>
            <h1 class="display-4 fw-normal">Arquivo Musical</h1>

            <p class="lead fw-normal">Suas faixas e álbuns preferidos em um só lugar.</p><br>

            <?php if(Auth::guest()): ?>
                <a href="<?php echo e(url('login')); ?>" class="btn btn-outline-primary">Começar</a>
            <?php else: ?>
                <a href="<?php echo e(url('tracks/inserir')); ?>" class="btn btn-outline-primary">Cadastrar Faixas</a>
                <a href="<?php echo e(url('albums/inserir')); ?>" id="albuns" class="btn btn-outline-secondary">Cadastrar Álbuns</a>
            <?php endif; ?>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>