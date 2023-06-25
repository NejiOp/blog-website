

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $myPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($post->id); ?></th>
                    <td><?php echo e($post->title); ?></td>
                    <td>
                        <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('post.destroy', $post->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloc\resources\views/post/dashboard.blade.php ENDPATH**/ ?>