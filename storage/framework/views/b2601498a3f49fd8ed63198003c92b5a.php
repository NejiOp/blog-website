
<?php $__env->startSection('content'); ?>


    <?php if(session('msg')): ?>
    <div class="alert alert-success">
        <?php echo e(session('msg')); ?>

    </div>
    <?php endif; ?>
   <div class="container">
    <a href="<?php echo e(route('post.create')); ?>" class="btn btn-danger text-center m-3">Add new post</a>
   </div>
<div class="container">
    <div class="row">

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card">
        <div class="card-header">
      <?php echo e($post->title); ?> <div><?php echo e($post->user->name); ?></div> <span><?php echo e($post->created_at->diffForHumans()); ?><span>
        </div>
        <div class="card-body">
          <p class="card-text">  <?php echo e(substr($post->content, 0, 100)); ?> </p>
          <a href="<?php echo e(route('post.show', $post->id)); ?>" class="btn btn-primary">show the post</a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div><?php echo e($posts->links()); ?></div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloc\resources\views/post/index.blade.php ENDPATH**/ ?>