

<?php $__env->startSection('content'); ?>
       <h1>All Graphs</h1>
             <?php if(count($Graphs)>0): ?>
             <div class="card">
                 <ul class="list-group list-group-flush">
                  <?php $__currentLoopData = $Graphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $graph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <li class="list-group-item">
                                      <h3><a href="/api/graphs/<?php echo e($graph->id); ?>"><?php echo e($graph->name); ?></a></h3>
                                      <small>Created on <?php echo e($graph->created_at); ?></small>


                                    </li>



                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </ul>

             </div>
              <?php else: ?>

            <?php echo e(__('No graphs created.')); ?>

              <?php endif; ?>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/graphs/index.blade.php ENDPATH**/ ?>