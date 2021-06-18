

<?php $__env->startSection('content'); ?>
      <a href="/api/graphs" class="btn btn-default"> Go Back</a>
       <h1><?php echo e($graph->name); ?></h1>
       <p><?php echo e($graph->description); ?></p>
       <hr>
       <small>Written on <?php echo e($graph->created_at); ?></small>
<hr>
<?php echo Form::open(['action' => ['App\Http\Controllers\GraphController@destroy', $graph->id], 'method'=> 'POST', 'class'=> 'pull-right, ']); ?>

<?php echo e(Form::hidden('_method', 'DELETE')); ?>

<?php echo e(Form::submit('Delete       ',['class'=>'btn btn-danger'])); ?>

<?php echo Form::close(); ?>


<a href="/api/graphs/<?php echo e($graph->id); ?>/edit" class="btn btn-primary">Edit Graph</a>




<?php $__env->stopSection(); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/graphs/show.blade.php ENDPATH**/ ?>