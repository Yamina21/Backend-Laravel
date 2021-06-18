

<?php $__env->startSection('content'); ?>
       <h1>All Nodes</h1>
       <?php if(count($nodes)>0): ?>
       <div class="card">
           <ul class="list-group list-group-flush">
            <?php $__currentLoopData = $nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                              <li class="list-group-item">
                                <h3><a href="/api/nodes/<?php echo e($node->id); ?>">This is Node <?php echo e($node->id); ?> Belongs to Graph Number <?php echo e($node->Graph_id); ?></a></h3>
                                <p>This graph has <?php echo e(count($nodes)); ?> Node</p>


                              </li>



             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>

       </div>
        <?php else: ?>

      <?php echo e(__('No graphs created.')); ?>

        <?php endif; ?>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/nodes/index.blade.php ENDPATH**/ ?>