

<?php $__env->startSection('content'); ?>

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <div> <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm">Add User</a>
  </br> </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Password</td>
          <td>Role</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($users->id); ?></td>
            <td><?php echo e($users->name); ?></td>
            <td><?php echo e($users->password); ?></td>
            <td><?php echo e($users->role); ?></td>
            <td class="text-center">
                <a href="<?php echo e(route('users.edit', $users->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                <form action="<?php echo e(route('users.destroy', $users->id)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mvc2\laravel-crud-app\resources\views/users/index.blade.php ENDPATH**/ ?>