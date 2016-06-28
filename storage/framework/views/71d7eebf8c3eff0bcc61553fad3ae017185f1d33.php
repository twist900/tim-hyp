<html>
    <head>
        <?php echo $__env->make('shared._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <?php echo $__env->make('shared._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <!-- <div class="container"> -->
            <?php echo $__env->yieldContent('content'); ?>
<!--         </div>
 -->
        <?php echo $__env->make('shared._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('shared._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>