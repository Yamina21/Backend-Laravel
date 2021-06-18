

<?php $__env->startSection('content'); ?>
      <a href="/api/nodes" class="btn btn-default"> Go Back</a>
       <h1>Node ID Number :<?php echo e($node->id); ?></h1>
        <hr>
 <hr>
<?php echo Form::open(['action' => ['App\Http\Controllers\GraphController@destroy', $node->id], 'method'=> 'POST', 'class'=> 'pull-right, ']); ?>

<?php echo e(Form::hidden('_method', 'DELETE')); ?>

<?php echo e(Form::submit('Delete       ',['class'=>'btn btn-danger'])); ?>

<?php echo Form::close(); ?>


<a href="/api/nodes/<?php echo e($node->id); ?>/edit" class="btn btn-primary">Edit Node</a>




<?php $__env->stopSection(); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/nodes/show.blade.php ENDPATH**/ ?>