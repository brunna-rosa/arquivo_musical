<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo e('Arquivo Musical'); ?></title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
    <!-- Menu -->
    <?php echo $__env->make('templates.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <!-- Conteúdo -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>      
    
    <!-- Scripts -->
    <?php echo $__env->yieldContent('my-scripts'); ?> 
</body>
</html> 