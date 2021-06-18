

<?php $__env->startSection('content'); ?>
       <h1>All Relations with Nodes</h1>
             <?php if(count($nodes_parent)>0): ?>
             <div class="card">
                 <ul class="list-group list-group-flush">
                  <?php $__currentLoopData = $nodes_parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nodep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <li class="list-group-item">
                                      <h3><?php echo e($nodep->parent_node); ?> is the parent node to node <?php echo e($nodep->child_node); ?></h3>



                                    <hr>
                                 

                                    <a href="/api/relations/<?php echo e($nodep->id); ?>/edit" class="btn btn-primary">Edit Relation</a>
                                  </li>


                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </ul>


             </div>
              <?php else: ?>

            <?php echo e(__('No graphs created.')); ?>

              <?php endif; ?>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backend-laravel\resources\views/relations/index.blade.php ENDPATH**/ ?>