
<?php $__env->startSection('content'); ?>

    <?php if(session('msg')): ?>
    <div class="alert alert-success" >
    <?php echo e(session('msg')); ?>

    </div>
    <?php endif; ?>
<div class="container">
    <div class="row">
        
        <div class="card">
            <div class="card-header">
            <?php echo e($post->title); ?> <div><?php echo e($post->user->name); ?></div> <span> <?php echo e($post->created_at->diffForHumans()); ?></span>
            </div>
            <div class="card-body">
              <p class="card-text"> <?php echo e($post->content); ?>  </p>
              <a href="<?php echo e(route('post.index')); ?>" class="btn btn-success">Back</a>
            </div>
          </div>
    </div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloc\resources\views/post/show.blade.php ENDPATH**/ ?>