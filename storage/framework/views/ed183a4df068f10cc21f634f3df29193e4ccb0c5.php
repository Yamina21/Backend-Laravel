

<?php $__env->startSection('content'); ?>
       <h1>Edit Graph</h1>

       <?php echo Form::open(['action' => ['App\Http\Controllers\GraphController@update', $node->id], 'method'=> 'POST']); ?>

        <div class="form-group">
        <?php echo e(Form::label('graph_id','Graph_id')); ?>

        <?php echo e(form::text('Graph_id', $node->Graph_id,['class'=> 'form-control', 'placeholder' =>'Graph ID'])); ?>

        </div>

        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit',['class'=> 'btn btn-primary' ])); ?>

        <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/nodes/edit.blade.php ENDPATH**/ ?>